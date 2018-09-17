<?php

namespace App\Http\Controllers;

use App\booking\bookings;
use App\packages\hotels;
use App\packages\packages;
use App\packages\routes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user_Booking_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function bookingForm(){
        if(Auth::check()){
            $package = packages::find(request()->package_id);
            $route = routes::find(request()->route_id);
            $hotel = hotels::find(request()->hotel_id);
            $hotel_cost = $hotel->price * $package->duration;
            $estimate_total = $package->price + $route->price + $hotel_cost;
            $cur_date=date('Y-m-d');
            return view('zone.booking_form',compact('package','route','estimate_total','hotel','hotel_cost','cur_date'));
        }else{
            return redirect(route('login'));
        }

    }


    public function index()
    {

    }

    public function goBookingList($id){
        if(Auth::check()){
            $bookings = bookings::where('user_id',$id)->orderBy('id')->get();
            return view('zone.booking_list',compact('bookings'));
        }else{
            return redirect(route('login'));
        }

    }

    public function BookingSuccess($id,$uid){
        if(Auth::check()){
            $booking = bookings::find($id);
            $booking -> status = 'confirm';
            $booking -> save();
            $bookings = bookings::where('user_id',$uid)->orderBy('id')->get();
            return view('zone.booking_list',compact('bookings'));
        }else{
            return redirect(route('login'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = new bookings();
        $booking->user_id = Auth::id();
        $booking->package_id = request()->package_id;
        $booking->route_id = request()->route_id;
        $booking->hotel_id = request()->hotel_id;
        $booking->departure_date = request()->departure_date;
        $booking->qty = request()->qty;
        $booking->user_msg = request()-> user_msg;
        $booking->total_price = request()->estimate_total*request()->qty;
        $booking->save();
        return redirect(route('goBookingList',Auth::id()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::check()){
            $booking = bookings::find($id);
            return view('zone.booking_detail',compact('booking'));
        }else{
            return redirect(route('login'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()){
            $booking = bookings::find($id);
            $hotel_cost = $booking->hotels->price * $booking->packages->duration;
            $estimate_total =$booking->packages->price + $booking->routes->price + $hotel_cost;
            return view('zone.booking_update',compact('booking','hotel_cost','estimate_total'));
        }else{
            return redirect(route('login'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $booking = bookings::find($id);
        $booking->departure_date = request()->departure_date;
        $booking->qty = request()->qty;
        $booking->user_msg = request()-> user_msg;
        $booking->total_price = request()->estimate_total*request()->qty;
        $booking->status='pending';
        $booking->save();
        return redirect(route('goBookingList',Auth::id()));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
