<?php

namespace App\Http\Controllers;

use App\booking\bookings;
use App\packages\routes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class admin_Booking_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $bookings = bookings::orderBy('id','DESC')->get();
            return view('dashboard.booking.index', compact('bookings'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            return view('dashboard.booking.update',compact('booking'));
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
        if(Auth::check()){
            $booking = bookings::find($id);
            $booking -> confirm_price = request()-> confirm_price;
            $booking -> admin_msg = request()-> admin_msg;
            $booking -> status = 'acknowledge';
            $booking -> save();
            return redirect(route('manage_booking.index'))->with('status','Booking Replying Successfully!');
        }else{
            return redirect(route('login'));
        }

    }



    /*
     * Report by given Date
     */
    public function showBetweenReport(){
        $reports = false;
        return view('dashboard.reports',compact('reports'));
    }
    public function betweenReport(){
        $start = Carbon::parse(request()->start)->startOfDay();

        $end = Carbon::parse(request()->end)->endOfDay();
        $reports =bookings::join('packages','packages.id','bookings.package_id')
            ->select(
                'packages.title as title','bookings.total_price as price'
            )
            ->whereBetween('bookings.updated_at',[$start,$end])
            ->where('bookings.status','confirm')
            ->get();

        $total_price = bookings::whereBetween('updated_at',[$start,$end])->select(
            DB::raw('sum(total_price) as p')
        )
            ->where('status','confirm')
            ->first();

        return view('dashboard.reports',compact('reports','total_price'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = bookings::find($id);
        $booking->delete();
        return redirect()->back();
    }
}
