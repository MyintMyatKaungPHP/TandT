<?php

namespace App\Http\Controllers;


use App\user\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login_Controller extends Controller
{
    public function attemptLogin(){

        $email = request()->email;
        $password = request()->password;

        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $user= users::find(Auth::id());
            if($user->role=='user'){
                return redirect(route('zone'));
            }else{
                return redirect(route('dashboard'));
            }

        }else{
            return redirect()->back()->with('status','Email or Password incorrect!');
        }
    }

    public function login(){
        if(!Auth::check()){
            return view('zone.login');
        }else{
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(route('zone'));
    }
}
