<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Diklat;

class HomeController extends Controller
{
    //
    public function homeDashboardButton()
    {
        $data['diklat']= Diklat :: all();
        return view('homebutton',$data);
    }

    public function homeDashboard()
    {
        return view('home');
    }
}
