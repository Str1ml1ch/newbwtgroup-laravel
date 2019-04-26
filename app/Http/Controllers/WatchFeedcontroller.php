<?php

namespace ParsPogoda\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use ParsPogoda\Feedback;

class WatchFeedController extends Controller
{
    public function __construct()
{
}

    public function show()
    {
        if(Auth::check()) {
            $showfeed = Feedback::all();
            return view('watchfeed', ['title' => 'Просмотр отзывов', 'showfeed' => $showfeed]);
        }
        else
            return view('watchfeed', ['title' => 'Просмотр отзывов']);
    }
}
