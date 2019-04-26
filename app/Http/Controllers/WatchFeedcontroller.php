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
            $ide = $this->checkurl();
            if($ide>0&&$ide<=$this->checkmaxid())
            {
                $showfeed = Feedback::where('id',$ide)->get();
                return view('watchidfeed',['title'=>$ide." Feeedback",'showfeed'=>$showfeed]);
            }
            elseif ($ide>$this->checkmaxid())
            {
                abort(404);
            }
            else
                $showfeed = Feedback::all();
            return view('watchfeed', ['title' => 'Просмотр отзывов', 'showfeed' => $showfeed]);
        }
        else
            return view('watchfeed', ['title' => 'Просмотр отзывов']);
    }
    function checkurl()//Id нашего фидбека
    {
        $url = $_SERVER['REQUEST_URI'];
        $search = ['watchfeed','/','.'];
        $replace = [' '];//замена на
        $ps = str_replace($search, $replace, $url);
        return $ps;
    }
    function checkmaxid()//проверка максимально id
    {
        $max = Feedback::whereRaw('id = (select max(`id`) from Feedback)')->get();
        foreach ($max as $maxi)
        {
            $maximum = $maxi->id;
        }
        return $maximum;
    }
}
