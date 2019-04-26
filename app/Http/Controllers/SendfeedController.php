<?php

namespace ParsPogoda\Http\Controllers;

use Illuminate\Http\Request;
use ParsPogoda\Feedback;
use  ParsPogoda\Http\Requests\CreateValidationRequest;

class SendFeedController extends Controller
{

    public function show(CreateValidationRequest $request)
    {
        if($request->isMethod('post')) {
            $array = $request->except('_token', 'sendfeed');
            $sendfeed = new Feedback;
            $sendfeed->name = $array['sendname'];
            $sendfeed->surname = $array['sendsur'];
            $sendfeed->email = $array['sendmail'];
            $sendfeed->feedback = $array['feedb'];
            $sendfeed->save();
        }
    return view('sendfeed',['title'=>'Отправка отзыва']);
    }

}
