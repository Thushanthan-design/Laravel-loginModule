<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Auth;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }

   
    function checklogin(Request $request){
        // Validation
       // $this -> validate($request,['email'=>'required|email','passwoed'=>'required|alphaNum|min:5']);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:5'
        ]);

		//Authentication

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        if(Auth::attempt($user_data))
        {
            return redirect('success');
        }
        else{
            return back()->with('error','Wrong Login Details');
        }
    }

    function successlogin(){
        return view("success");
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }


}
