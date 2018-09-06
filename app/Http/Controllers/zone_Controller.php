<?php

namespace App\Http\Controllers;

use App\packages\cities;
use App\packages\hotels;
use App\packages\packages;
use App\packages\routes;
use Illuminate\Http\Request;

class zone_Controller extends Controller
{
    protected function index(){
        $cities = packages::where('del_status','0')->get();
        $packages = packages::where('del_status','0')->orderBy('id', 'desc')->limit(6)->get();
        return view('zone.index',compact('packages','cities'));
    }
    protected function packages(){
        $packages = packages::where('del_status','0')->paginate(6);
        return view('zone.packages',compact('packages'));
    }
    protected function package_detail($id){
        //need to change id
        $package = packages::find($id);
        $to_city = cities::find($package->city_id);

        //return yangon or mandalay relaed from to city
        $from_city = routes::where('to_city',$to_city->name)->groupBy('from_city')->get();

        $hotels = hotels::where('place',$package->cities->name)->get();

        $routes = routes::where('del_status','0')
            ->groupBy('from_city')
            ->get();
        return view('zone.package_detail',compact('routes','package','hotels','to_city','from_city'));
    }

    public function travelType($from_city,$to_city){
        $routes = routes::where('from_city',$from_city)
            ->where('to_city',$to_city)
            ->where('del_status','0')
            ->get();

        foreach($routes as $r){
            echo "
               <option value='{$r->id}'>{$r->type}</option>
            ";
        }

    }

    public function travelPrice($id){
        $price = routes::find($id);
        echo $price->price;
    }

    public function travelHotel($to_city){
        $hotels = hotels::where('place',$to_city)
            ->where('del_status','0')
            ->get();

        foreach($hotels as $r){
            echo "
               <option value='{$r->id}'>{$r->name}</option>
            ";
        }
    }

    public function hotelPrice($id){
        $price = hotels::find($id);
        echo $price->price;
    }
}
