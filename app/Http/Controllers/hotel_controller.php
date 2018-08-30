<?php

namespace App\Http\Controllers;

use App\packages\cities;
use App\packages\hotels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class hotel_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = hotels::where('del_status','0')->get();
        return view('dashboard.hotel.index',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = cities::where('del_status','0')->get();
        return view('dashboard.hotel.add',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'min:1|max:255',
            'price'=>'required',
            'place'=>'required',
            'link'=>'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $hotel = new hotels();
        $hotel->name = request()->name;
        $hotel->place = request()->place;
        $hotel->price = request()->price;
        $hotel->link = request()->link;
        $hotel->save();
        return redirect()->back()->with('status','New Hotel Creating Successfully!');
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
        $hotel = hotels::find($id);
        $cities = cities::where('del_status','0')->get();
        return view('dashboard.hotel.update',compact('cities','hotel'));
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
        $hotel = hotels::find($id);
        $hotel->name = request()->name;
        $hotel->place = request()->place;
        $hotel->price = request()->price;
        $hotel->link = request()->link;
        $hotel->save();
        return redirect(route('manage_hotel.index'))->with('status','Hotel Information Updating Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = hotels::find($id);
        $hotel->del_status = '1';
        $hotel->save();
        return redirect()->back()->with('status','Hotel Deleting Successfully!');
    }
}
