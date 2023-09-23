<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use App\Models\NewsHeadline;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function users(){
        $users = User::all();
        return view('admin.pages.users', [
            'users' => $users,
        ]);
    }

    public function events(){
        return view('admin.pages.events');
    }

    public function news(){
        return view('admin.pages.news');
    }

    public function sermons(){
        return view('admin.pages.sermons');
    }
}
