<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Diklat;

class HomeController extends Controller
{
    //
    public function homeDashboardButton($id)
    {
        $data['diklat']= Diklat :: all();
        $data = DB::select('select * from diklat where id = ?', [$id]);
        return view('homebutton',$data);
    }

    public function homeDashboard()
    {
        return view('home');
    }
    public function input()
    {
        return view('forms/forminput');
    }
}
