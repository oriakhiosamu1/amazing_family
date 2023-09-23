<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use App\Models\NewsHeadline;
use App\Models\Sermon;
use Illuminate\Http\Request;

class EditAdminPageController extends Controller
{
    //
    public function event_form(EventModel $event){
        return view('admin.pages.edit.event', [
            'event' => $event,
        ]);
    }

    public function edit_event(Request $request, EventModel $event){
         // Validate and update the resource
            $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required',
            'close_time' => 'required',
            'start_time' => 'required',
            'venue' => 'required',
            'description' => 'nullable|string',
            // Add more validation rules for other fields
            ]);
    
            $event->update($validatedData);
    
            return redirect()->route('event_list')
                ->with('success', 'Event updated successfully');
    }

    public function news_form(NewsHeadline $news){
        return view('admin.pages.edit.news', [
            'news' => $news,
        ]);
    }

    public function edit_news(Request $request, NewsHeadline $news){
        $validatedData = $request->validate([
            'headline' => 'required',
            'photo' => 'image',
            'body' => 'required',
            'intro' => 'required',
            'conclusion' => 'required'
        ]);

        if($request->hasFile('photo')){
            $validatedData['photo'] = $request->file('photo')->store('newsPhoto', 'public');
        }

        $news->update($validatedData);

        return redirect()->route('news_list');
    }

    public function sermons_form(Sermon $sermons){
        return view('admin.pages.edit.sermons', [
            'sermons' => $sermons,
        ]);
    }

    public function edit_sermons(Request $request, Sermon $sermons){
        $validatedData = $request->validate([
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
            $validatedData['photo'] = $request->file('photo')->store('newsPhoto', 'public');
        }

        $sermons->update($validatedData);

        return redirect()->route('sermon_list');
    }
}
