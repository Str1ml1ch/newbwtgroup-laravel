@extends('maket')
@section('Main')
@parent
<style>
	td[id=ds]{
		position: relative;
		width: 80%;
	}
</style>
<body>
@if(Auth::check()==true)
	<div class="text-center">
	<h1>
		Просмотр отзывов:
	</h1>
	</div>
	<table class="table table-bordered">
<tr>
	<td>#</td>
	<td id="ds">Отзыв</td>
	<td>Автор</td>
	<td>Время</td>
</tr>
		@foreach($showfeed as $result)
		<tr>
			<td><a href="/{{'watchfeed.'.$result->id}}">{{$result->id}}</a></td>
			<td id="ds">{{$result->feedback}}</td>
			<td>{{$result->name}}</td>
			<td>{{$result->created_at}}</td>
		</tr>
			@endforeach
	</table>
	@endif
@if(Auth::check()==false)
	<div class="text-center">
		<h1>Вы не ввошли в аккаунт, вы хотите:<br><li> <a href="/">Зарегестрироваться</a></li><br> <li><a href="/entersite">Войти</a></li></h1>
	</div>
	@endif
</body>
@endsection