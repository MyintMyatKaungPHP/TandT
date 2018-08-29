<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class zone_Controller extends Controller
{
    protected function index(){
        return view('zone.index');
    }
    protected function packages(){
        return view('zone.packages');
    }
}
