<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //returns sign in/ login form
    public function signin(){
        return view('users.signin');
    }

    //Logs in user
    public function auth_signin(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if(auth()->user()->isAdmin == true ){
                return redirect()->intended('admin/users');
            }
            return redirect()->intended('/')->with('success', 'Welcome '. auth()->user()->name);
        }

        // Authentication failed
        return redirect()->route('login')
        ->withInput($request->only('email'))
        ->withErrors(['email' => 'Invalid email or password']);
    }

    //Logs out user
    public function auth_signout(){
        Auth::logout();
        return redirect('/')->with('success', 'Thanks For Visiting');;
    }
}
