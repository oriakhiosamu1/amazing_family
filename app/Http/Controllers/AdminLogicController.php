<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use App\Models\NewsHeadline;
use App\Models\Sermon;
use Illuminate\Http\Request;

class AdminLogicController extends Controller
{
    public function set_event(Request $request){

        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'venue' => 'required',
            'description' => 'required',
        ]);

        EventModel::create([
            'name' => $request->name,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'close_time' => $request->close_time,
            'venue' => $request->venue,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('message', 'Event Set Successful');
    }

    public function create_news(Request $request){

        $formField = $request->validate([
            'headline' => 'required',
            'photo' => 'image',
            'body' => 'required',
            'intro' => 'required',
            'conclusion' => 'required'
        ]);

        if($request->hasFile('photo')){
            $formField['photo'] = $request->file('photo')->store('newsPhoto', 'public');
        }

        NewsHeadline::create($formField);

        return redirect()->back()->with('message', 'News Created Successfully');
    }

    public function create_sermons(Request $request){
        $formField = $request->validate([
            'title' => 'required',
            'photo' => 'image',
            'body' => 'required',
            'intro' => 'required',
            'conclusion' => 'required',
            'speaker' => 'required',
            'venue' => 'required',
            'text' => 'required',
            'date' => 'required',
        ]);

        if($request->hasFile('photo')){
            $formField['photo'] = $request->file('photo')->store('sermonsPhoto', 'public');
        }

        Sermon::create($formField);

        return redirect()->back()->with('message', 'Sermon Created Successfully');

    }

}
