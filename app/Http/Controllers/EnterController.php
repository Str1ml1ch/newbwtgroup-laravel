<?php

namespace ParsPogoda\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use ParsPogoda\Mod;
use ParsPogoda\User;
use PhpParser\Node\Expr\Print_;
use ParsPogoda\Http\Requests\CreateValidation;

class EnterController extends Controller
{

    public function show(Request $request)
    {
        if(Auth::check())
        {
            return redirect()->route('weather');
        }
        $user['email']=NULL;$result=NULL;
        if($request->isMethod('post'))
        {
          $array = $request->except( 'enterbut');
          $entmail = $array['entermail'];
          $user =  $this->zapros($entmail);
                if ($user['email'])
                {
                   if ($array['enterpass'] == $user['pass'])
                   {
                        $result = 'Всё отлично, '.$user['name'].', вы успешно вошли';
                        $as = Auth::loginUsingId($user['id']);
                   }
                   else
                       {
                       $result = "Введён неверный пароль";
                       }
                }
                else
                    {
                    $result = "Такого логина не существует";
                    }
        }
        return view('enter',['title'=>'Вход','result'=>$result]);
    }
    function zapros($entmail)//запрос
    {
        $mail = User::where('Email',$entmail)->get();
        foreach ($mail as $result) {
            $userarr=([
                'id' => $result->ID,
                'pass' => $result->Password,
                'email' => $result->Email,
                'name' => $result->Name,
            ]
            );
        }
        return $userarr;
    }
}
