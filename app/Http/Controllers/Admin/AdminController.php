<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Alert;
use App\User;
use App\Models\Asset;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $data['assets'] = Asset::get()->count();
        $data['locations'] = Location::get()->count();
        return view('admin.dashboard',$data);
    }

}
