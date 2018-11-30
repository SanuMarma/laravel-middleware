<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\User;

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

    public function loginStore(Request $request){
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email','=',$email)
                      ->where('password','=',$password)
                      ->first();
        if($user){
            Session::put('userid',$user->id);
            Session::put('useremail',$user->email);


            return redirect('/dashboard');
        }
        else{
            echo 'User Not found';
        } 
    }

    public function logout(Request $request){
        if($request->session()->has('userid')){
            echo 'Session found';
            $request->session()->flush();

        }
        else{
            echo 'Session not found';
        }
    }

     public function dashboard(){
        return view('dashboard');
     }

     public function join(){
        $data = DB::table('districts')
                    ->join('divisions','districts.division_id','divisions.id')
                    ->select('districts.id','districts.name as division','divisions.name as district')
                    ->get();
                
        return view('join');
     }
}
