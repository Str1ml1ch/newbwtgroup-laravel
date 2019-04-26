<?php

namespace ParsPogoda\Http\Controllers;

use Illuminate\Http\Request;
use ParsPogoda\Feedback;

class WatchFeedController extends Controller
{
    public function show(Request $request)
    {
        $this->middleware('auth');
       $showfeed = Fidback::all();
       dump($showfeed);
        return view('watchfeed',['title'=>'Просмотр отзывов']);
    }
}
