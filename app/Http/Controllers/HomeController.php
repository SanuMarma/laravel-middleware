<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    	$name = 'ABCD';
    	return view('welcome', ['myname'=>$name]);
    }

    public function about(){
    	return view('about');
    }

    public function contact(){
    	return view('sub.sub-sub.contact');	
    }

    public function login(){
        return view('login');
    }

}
