<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.app');
    }
    
    public function home(){
        $name = 'Nikhil';
        return view('layouts.home')->with('name',$name);
    }

    public function about(){
        $name = 'About-Us';
        return view('layouts.about')->with('name',$name);
    }

    public function contact(){
        $data = array(
            'name' =>  'Nikhil',
            'number' => '8735426177',
            'email'  => 'redy@gmail.com'
        );
        return view('layouts.contact')->with('data',$data,);
    }

    public function details(){
        return view('layouts.details');
    }
}
