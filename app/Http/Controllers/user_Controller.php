<?php

namespace App\Http\Controllers;

use App\user\users;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class user_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('zone.registration');
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
            'phone'=>'required',
            'name'=>'required'
        ]);
        $image = request()->file('image');
        $image_name = md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images/clients/');
        $image->move($destinationPath,$image_name);

        $user = new users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = sha1($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->image = $image_name;
        $user->save();
        return redirect(route('login'))->with('status','Registration Success!');
    }

    public function login(){
        return view('zone.login');
    }
    public function attemptLogin(){
        $email = request()->email;
        $password = request()->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect(route('zone'));
        }else{
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
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
        //
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
