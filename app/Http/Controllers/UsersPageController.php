<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use App\Models\NewsHeadline;
use App\Models\Sermon;
use Illuminate\Http\Request;

class UsersPageController extends Controller
{
    public function contact(){
        return view('users.contact');
    }

    public function events(){
        // $events = EventModel::all();
        // dd(EventModel::all());

        return view('users.events', [
            'events' => EventModel::all(),
        ]);
    }

    public function sermons(){
        $sermons = Sermon::all();

        return view('users.sermons', [
            'sermons' => $sermons
        ]);
    }

    public function news(){
        $news = NewsHeadline::all();

        return view('users.news', [
            'news' => $news
        ]);
    } 

    public function give(){
        return view('users.give');
    }
}
