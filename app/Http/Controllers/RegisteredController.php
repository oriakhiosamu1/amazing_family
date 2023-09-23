<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredController extends Controller
{
    //This function directs users and admin to their respective pages
    public function registered(){
        if(auth()->user()->isAdmin== true){
            return redirect('admin/users');
        }else{
            
            return redirect('/')->with('success', 'Welcome '. auth()->user()->name);
        }
    }
}
