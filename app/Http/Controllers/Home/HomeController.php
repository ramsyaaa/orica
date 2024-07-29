<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Alert;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function service()
    {
        return view('home.service');
    }

    public function partner()
    {
        return view('home.partner');
    }

    public function contact()
    {
        return view('home.contact');
    }

}
