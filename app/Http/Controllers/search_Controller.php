<?php

namespace App\Http\Controllers;

use App\packages\packages;
use Illuminate\Http\Request;

class search_Controller extends Controller
{
    public function city_packages(){
        $packages = packages::where('del_status','0')->where('city_id',request()->city)->paginate(6);
        return view('zone.packages',compact('packages'));
    }

    public function packages_type($type){
        $packages = packages::where('del_status','0')->where('type',$type)->paginate(6);
        return view('zone.packages',compact('packages'));

    }
}
