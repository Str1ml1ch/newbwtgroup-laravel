<?php

namespace ParsPogoda\Http\Controllers;
use  ParsPogoda\Http\Requests\CreateValidation;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use ParsPogoda\User;

class RegisterController extends Controller
{
    public function show(CreateValidation $request)
    {
        $err = '';
        if (Auth::check() == true) {
            return redirect()->route('weather');
        }
            if ($request->isMethod('post')) {
                $array = $request->except('regbut');
                $useri = new User();
                $useri->Name = $array['regname'];
                $useri->Surname = $array['regsur'];
                $useri->Email = $array['regmail'];
                $useri->Date = $array['regdate'];
                $useri->Gender = $array['regsel'];
                $useri->Password = $array['regpassword'];
                $useri->remember_token = $array['_token'];
                if ($array['regpassword'] == $array['regrepassword']) {
                    $useri->save();
                    $err = "Всё отлично, ".$useri->Name.". Вы успешно зарегестрировались!";
                } else {
                    $err = "Ваши пароли не совпадают";
                }
            }

            return view('registr', ['title' => 'Регистрация', 'Registration' => 'active','er'=>$err]);
    }

}
