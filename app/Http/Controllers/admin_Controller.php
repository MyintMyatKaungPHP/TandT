<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admin_Controller extends Controller
{
    public function dashboard(){
        if(Auth::user()->role=='admin'||Auth::user()->role=='editor'){
            return view('dashboard.dashboard');
        }else{
            return redirect()->back();
        }
    }
}
