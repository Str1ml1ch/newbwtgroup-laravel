@extends('maket')
@section('Main')
@parent
<style type="text/css">
body{
	background-color: #92a8d1;
}
form
{
	position: relative;
	top: 30%;
	left: 40%;
	width: 30%;
}
input
{
	position: absolute;
	left: 20%;
}
button[name=enterbut]
{
	position: absolute;
	left: 13%;
	width: 200px;
}
h1
{
	position: absolute;
	left: 20%;
	top: -60%;
}
p[id=sd]
{
	position: absolute;
	left: 40%;
	top:60%;
	font-size: 25px;
	color: #2d995b;
}
	h1[id=pp]
	{
		position: absolute;
		left: 30%;
		top: 45%;
		color: red;
	}
</style>
@if(Auth::check()==false)
<form method="POST" class="form-group" name="ent">
	{{ csrf_field() }}
		@csrf
	<h1>Вход:</h1>
			<div class="form-inline">
				<font size="4px">Email:</font>
			<input type="Email" name="entermail" placeholder="taraskuznetsow@gmail.com" class="form-control" required>
		</div>
		<br>
		<div class="form-inline">
			Password:
			<input type="password" name="enterpass" placeholder="Password" class="form-control" required>
		</div>
		<br>
			<button type="sumbit" class="btn btn-outline-dark" name="enterbut">Войти</button>
	</form>
<p id="sd">{{$result}}</p>
	@endif
@if(Auth::check()==true)
		<div class="text-center">
		<h1 id="pp">{{$result}}</h1>
		</div>
@endif
@endsection