<?php

namespace App\Http\Controllers;

use App\user\users;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class user_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()){
            return view('zone.registration');
        }else{
            return redirect()->back();
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
        $this->validate($request,[
            'email'=>'unique:users|min:3',
            'password'=>'min:3|confirmed',
            'address'=>'required',
            'phone'=>'required|max:11',
            'name'=>'required'
        ]);

        $image = request()->file('image');
        $image_name = md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images/clients/');
        $image->move($destinationPath,$image_name);

        $user = new users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->image = $image_name;
        $user->save();
        return redirect(route('login'))->with('status','Registration Success!');
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
        //
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
        $user = users::find($id);
          if(isset(request()->image)){
              $image = request()->file('image');
              $image_name = md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
              $destinationPath = public_path('images/clients/');
              $image->move($destinationPath,$image_name);
              File::delete('images/clients/'.$user->image);
          }else{
              $image_name = $user->image;
          }

          if(isset(request()->password)){
              $this->validate($request,[
                 'password'=>'min:3|confirmed',
              ]);
              if(Hash::check($request->cur_password, $user->password)){
                  $password = Hash::make($request->password);
              }else{
                  return redirect()->back()->withInput()->withErrors(array('errors' => 'Current password does not match!'));
              }
          }else{
              $password = $user->password;
          }
        $this->validate($request,[
            'email'=>'unique:users|min:3',
            'address'=>'required',
            'phone'=>'required|max:11',
            'name'=>'required'
        ]);

        $user = users::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->image = $image_name;
        $user->save();
        return redirect()->back()->with('status','Profile Updating Success!');

    }

    public function user_profile(){
        $user = users::find(Auth::id());
        return view('zone.profile',compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
