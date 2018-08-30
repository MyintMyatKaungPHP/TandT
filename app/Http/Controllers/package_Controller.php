<?php

namespace App\Http\Controllers;

use App\packages\cities;
use App\packages\packages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class package_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = packages::where('del_status','0')->get();
        return view('dashboard.tour_packages.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = cities::where('del_status','0')->get();
        return view('dashboard.tour_packages.add',compact('cities'));
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
            'title'=>'min:1|max:255',
            'price'=>'required',
            'description'=>'required',
            'itinerary'=>'required',
            'geo_location'=>'required',
            'duration'=>'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $image_arr = array();
        $images = request()->file('images');
        foreach($images as $i){
            $image_name = md5($i->getClientOriginalName()).'.'.$i->getClientOriginalExtension();
            $image_destinationPath = public_path('images/tour/');
            $i->move($image_destinationPath,$image_name);
            array_push($image_arr,$image_name);
        }

        $package = new packages();
        $package->title = request()->title;
        $package->city_id = request()->city_id;
        $package->price = request()->price;
        $package->description = request()->description;
        $package->itinerary = request()->itinerary;
        $package->geo_location = request()->geo_location;
        $package->duration = request()->duration;
        $package->images =implode(',',$image_arr);
        $package->save();
        return redirect()->back()->with('status','New Tour Package Creating Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = packages::find($id);
        return view('dashboard.tour_packages.detail',compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = packages::find($id);
        $cities = cities::where('del_status','0')->get();
        return view('dashboard.tour_packages.update',compact('package','cities'));
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
        $validator = Validator::make($request->all(),[
            'title'=>'min:1|max:255',
            'price'=>'required',
            'description'=>'required',
            'itinerary'=>'required',
            'geo_location'=>'required',
            'duration'=>'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        //check user choose image
        $images = null;
        if(isset(request()->images)){

            //if choose delete the images
            $package = packages::find($id);
            $image_arr = explode(',',$package->images);
            foreach ($image_arr as $i){
                File::delete('images/tour/'.$i);
            }

            $image_arr = array();
            $images = request()->file('images');
            foreach($images as $i){
                $image_name = md5($i->getClientOriginalName()).'.'.$i->getClientOriginalExtension();
                $image_destinationPath = public_path('images/tour/');
                $i->move($image_destinationPath,$image_name);
                array_push($image_arr,$image_name);
            }
            $images = implode(',',$image_arr);
        }else{
            $db_image = packages::find($id);
            $images = $db_image->images;
        }
        $package = packages::find($id);
        $package->title = request()->title;
        $package->city_id = request()->city_id;
        $package->price = request()->price;
        $package->description = request()->description;
        $package->itinerary = request()->itinerary;
        $package->geo_location = request()->geo_location;
        $package->duration = request()->duration;
        $package->images =$images;
        $package->save();
        return redirect()->back()->with('status','New Tour Package Creating Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = packages::find($id);
        $image_arr = explode(',',$package->images);
        foreach ($image_arr as $i){
            File::delete('images/tour/'.$i);
        }
        $package->delete();
        return redirect(route('manage_package.index'))->with('status','Tour Package Deleting Successfully!');
    }
}
