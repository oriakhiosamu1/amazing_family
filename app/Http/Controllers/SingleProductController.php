<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use App\Models\NewsHeadline;
use App\Models\Sermon;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    //

    public function news_list(){
        $newsList = NewsHeadline::all();

        //return view('admin.pages.news_list');
        return view('admin.pages.news_list', [
            'news_list' => $newsList
        ]);
    }

    public function show_news(NewsHeadline $listings){
        return view('admin.pages.single_news_page', [
            'list' => $listings
        ]);
    }

    public function sermon_list(){

        $sermons = Sermon::all();
        return view('admin.pages.sermon_list', [
            'sermons' => $sermons,
        ]);
    }

    public function show_sermons(Sermon $listings){
        return view('admin.pages.single_sermons_page', [
            'sermons' => $listings,
        ]);
    }

    public function event_list(){
        return view('admin.pages.event_list', [
            'eventList' => EventModel::all(),
        ]);
    }

    public function remove_sermons(Sermon $listing){
        $listing->delete();

        return redirect()->back()->with('success', 'Delete Successful');
    }

    public function remove_event(EventModel $listing){
        $listing->delete();

        return redirect()->back()->with('success', 'Delete Successful');
    }

    public function remove_news(NewsHeadline $listing){
        $listing->delete();

        return redirect()->back()->with('success', 'Delete Successful');
    }
}
