<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class UsersLogicController extends Controller
{
    public function contact_form_submit(Request $request){
        //validation logic

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        //checks if sender is authenticated or not

        if(auth()->check()){
            if(auth()->user()->email == $request->email && auth()->user()->name == $request->name){
                contact::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'message' => $request->message,
                ]);

                return redirect()->back()->with('success', 'Thank You For Reaching Out To Us');
            }else{
                return redirect()->back()->with('failure', 'Mail credentials does not match');
            }
            
        }else{
            contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);
    
            return redirect()->back()->with('success', 'Thank You For Reaching Out To Us');
        }
    }
}
