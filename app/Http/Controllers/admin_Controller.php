<?php

namespace App\Http\Controllers;

use App\booking\bookings;
use App\packages\packages;
use App\user\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admin_Controller extends Controller
{
    public function dashboard(){
        if(Auth::user()->role=='admin'||Auth::user()->role=='editor'){

            $monthly_price = bookings::select(
                DB::raw("sum(confirm_price) as total_price"),
                DB::raw("DATE_FORMAT(updated_at,'%M') as months"),
                DB::raw("DATE_FORMAT(updated_at,'%Y') as year")
            )
                ->where('status','confirm')
                ->groupBy('months')
                ->whereYear('updated_at','=',date('Y'))
                ->orderBy('updated_at','ASC')
                ->get();

            $yearly_price = bookings::select(
                DB::raw("sum(confirm_price) as total_price"),
                DB::raw("DATE_FORMAT(updated_at,'%Y') as year")
            )
                ->where('status','confirm')
                ->groupBy('year')
                //->whereYear('updated_at','=',date('Y'))
                ->orderBy('updated_at','ASC')
                ->get();

            $yearly_users = users::select(
                DB::raw("count(id) as total_users"),
                DB::raw("DATE_FORMAT(created_at,'%Y') as year")
            )
                ->groupBy('year')
                //->whereYear('updated_at','=',date('Y'))
                ->orderBy('created_at','ASC')
                ->get();
            //return $yearly_user;

            //total usercount
            $usercount = users::count();
            $packagecount = packages::count();
            $bookingcount = bookings::count();

            //for pie Chart
            $top_package = bookings::where('status','confirm')
                ->select('bookings.*',
                    DB::raw('count(package_id) as total')
                    )
                ->groupBy('package_id')
                ->take(6)->get();
            return view('dashboard.dashboard',compact('top_package','monthly_price','yearly_price','yearly_users','usercount','packagecount','bookingcount'));
        }else{
            return redirect()->back();
        }

    }


    public function checkExistMonth($month ,$arr){
        $a = array_key_exists($month,$arr) ? true : false;
        return $a;
    }
}


?>

