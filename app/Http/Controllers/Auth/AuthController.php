<?php

namespace App\Http\Controllers\Auth;

use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\User; // Assuming your model is in the App\Models namespace

class AuthController extends Controller
{
    public function loginpage() {
        return view('auth.login');
    }

    public function loginUser(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);   

        $email = $req->get('email');
        $password = $req->get('password');

        $user = User::where('email', $email)->first();
        if ($user && \Hash::check($password, $user->password)) {
            auth()->guard('web')->login($user,true);
            session(["email" => $email]);
            if (Session::has('url.intended')) {
                return redirect()->intended(Session::pull('url.intended'));
            }
            alert()->success('Login Success');
            return redirect('/admin');
        } else {
            alert()->error('Email atau Password Salah!');
            return redirect('/auth/login');
        }
    }

    public function logout() {
        auth()->logout();
        alert()->success('Logout Success');
        return redirect('/auth/login');
    }
}

