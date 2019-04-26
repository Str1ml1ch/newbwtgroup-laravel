@extends('maket')
@section('Main')
@parent
<meta charset="utf-8">
<body>
@if (Auth::check()==true)
	<div class="text-center">
		<h1>Погода в Запорожье:</h1>
	</div>
 <p class="text-center"><font size="4" ><b style="color: #000000">{{$parser}}</b></font></p>
</body>
	@endif
@if(Auth::check()==false)
	<div class="text-center">
		<h1>Вы не ввошли в аккаунт, вы хотите:<br><li> <a href="/">Зарегестрироваться</a></li><br> <li><a href="/entersite">Войти</a></li></h1>
	</div>
@endif
@endsection