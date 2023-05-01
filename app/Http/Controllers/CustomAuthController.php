<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login(){
 
        return view('auth.login');
    }

    public function register(){

        return view('auth.register');
    }

    public function registerUser(Request  $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required | email | unique:logins',
            'password' => 'required | min:5 | max:12',
        ]);
        $login = new Login();
        $login->email = $request->email;
        $login->name = $request->name;
        $login->password = Hash::make($request->password);
        $user = $login->save();
        if($user){
            return back()->with('success','Sucessfully registered');
        }
        else{
            return back()->with('failure','Something went wrong');
        }
    }

    public function loginUser(Request  $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required | min:5 | max:12',
        ]); 
        $loginuser = Login::where('email','=',$request->email)->first();
        if($loginuser){
        if(Hash::check($request->password,$loginuser->password )){
            $request->session()->put('loginId',$loginuser->id);
            return redirect('dashboard');
        }
        else{
            return back()->with('failure','Incorrect pasword');
        }
    }
    else{
        return back()->with('failure','Something went wrong');
    }
    }
    // public function resetpassword(Request  $request){
    //     $request->validate([
    //         'password' => 'required | min:5 | max:12',
    //     ]);
    //     $login = new Login();       
    //     $login->password = $request->password;
    //     $resetpassword = $login->save();
    //     if($resetpassword){
    //         return redirect('dashboard');
    //     }
    //     else{
    //         return back()->with('failure','Something went wrong');
    //     }
    // }

    public function dashboard(){

        $data = array();
        if(Session::has('loginId')){
            $data = Login::where('id','=',Session::get('loginId'))->first();
         return view('auth.dashboard',compact('data'));
    }
}
    public function logout(){

        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
