<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

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
        $login->password = $request->password;
        $user = $login->save();
        if($user){
            return back()->with('success','Sucessfully registered');
        }
        else{
            return back()->with('failure','Something went wrong');
        }
    }
}
