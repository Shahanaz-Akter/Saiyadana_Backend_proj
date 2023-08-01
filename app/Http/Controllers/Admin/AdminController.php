<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{



    public function dashboard()
    {


        return view('Adminview.dashboard');
    }

    public function signup()
    {
        return view('Userview.signup');
    }
    public function index()
    {
        return view('Userview.index');
    }
}
