@extends('maket')
@section('Main')
@parent
<style>
	h1[id=pp]
	{
		position: absolute;
		left: 35%;
		top: 45%;
		color: blue;
	}
</style>
<body>
@if(Auth::check()==false)
	<div class="text-center">
	<form method="POST" action="/" class="form-group" name="reg">
		@csrf
		<h1>Регистрация:</h1>
	<div class="form-inline">
		<font size="4px">Имя:</font>
		<input type="text" name="regname" placeholder="Тарас" class="form-control" >
	</div>
	<br>
	<div class="form-inline">
		<font size="4px">Фамилия:</font>
		<input type="text" name="regsur" placeholder="Кузнецов" class="form-control" >
	</div>
	<br>
	<div class="form-inline">
		<font size="4px">Email:</font>
		<input type="Email" name="regmail" placeholder="taraskuznetsow@gmail.com" class="form-control" >
	</div>
	<br>
	<div class="form-inline">
		<font size="4px">Пол:</font>
		<select class="form-control" name="regsel">
		<option value="Non">Choose</option>
		<option value="Man">Мужской</option>
		<option value="Woman">Женский</option>
		</select>
	</div>
	<br>
	<div class="form-inline">
		<font size="4px">День рождения:</font>
		<input type="date" name="regdate" placeholder="24.05.2000" class="form-control">
	</div>
	<br>
	<div class="form-inline" >
		<font size="4px">Пароль:</font>
		<input type="password" name="regpassword" placeholder="Password" class="form-control">
	</div>
	<br>
	<div class="form-inline" >
		<font size="4px">Повторите пароль:</font>
		<input type="password" name="regrepassword" placeholder="RePassword" class="form-control">
	</div>
	<br>
		<button type="sumbit" class="btn btn-outline-success" name="regbut">Зарегестрироваться</button>
	</form>
		@if($er!='')
			<p><strong>{{$er.'!'}}</strong></p>
			@endif
		@if($errors->any())
		<div>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
			</ul>
		</div>
			@endif
</div>
	@endif
	@if(Auth::check()==true)
		<div class="text-center">
			<h1 id="pp">Вы уже вошли в ваш аккаунт</h1>
		</div>
	@endif
</body>
@endsection