<?php

namespace ParsPogoda\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExitController extends Controller
{
    public function show()
    {
      Auth::logout();
      return redirect()->route('entertosite');
    }
}
