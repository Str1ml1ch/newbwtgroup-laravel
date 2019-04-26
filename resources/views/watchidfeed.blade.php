@extends('maket')
@section('Main')
    @parent
    <style>
        form[id]
        {
            background-color: rgba(0, 400, 600, 0.2); /* Цвет фона и значение прозрачности */
        }
    </style>
    @foreach($showfeed as $result)
        <div class="text-left">
        <h1>{{"Username: ".$result->name}}</h1><br>
        </div>
        <div class="text-center">
       <form id="form"><h2>Feedback:</h2><font face="verdana" color="black" size="5">{{$result->feedback}}</font><br></form>
        </div>
        <div class="text-left">
        <font face="verdana" color="black" size="3">Datetime published: {{$result->created_at}}</font>
        </div>
    @endforeach
@endsection