<?php

namespace App\Http\Controllers;

use App\packages\cities;
use App\packages\routes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class route_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = routes::where('del_status','0')->get();
        return view('dashboard.route.index',compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = cities::where('del_status','0')->get();
        return view('dashboard.route.add',compact('cities'));
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
            'price'=>'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $route = new routes();
        $route->from_city = request()->from_city;
        $route->to_city = request()->to_city;
        $route->price = request()->price;
        $route->type = request()->type;
        $route->save();
        return redirect()->back()->with('status','New Route Creating Successfully!');
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
        $route = routes::find($id);
        $cities = cities::where('del_status','0')->get();
        return view('dashboard.route.update',compact('route','cities'));
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
        $route = routes::find($id);
        $route->from_city = request()->from_city;
        $route->to_city = request()->to_city;
        $route->price = request()->price;
        $route->type = request()->type;
        $route->save();
        return redirect(route('manage_route.index'))->with('status','Route Information Updating Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $route = routes::find($id);
        $route->del_status = '1';
        $route->save();
        return redirect()->back()->with('status','Route Deleting Successfully!');
    }
}
