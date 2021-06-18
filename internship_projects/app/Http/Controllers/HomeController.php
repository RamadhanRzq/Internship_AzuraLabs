<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function homeDashboard()
    {
        return view('/home');
    }
    public function input()
    {
        return view('/forms/forminput');
    }
}
