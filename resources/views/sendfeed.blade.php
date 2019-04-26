@extends('maket')
@section('Main')
@parent
<style type="text/css">
  input{
    position: absolute;
    left: 70%;
    width: 50%;
  }
  body {
    background-color: #92a8d1;
  }
  form[name=send]
  {
    position: absolute;
    left: 35%;
    width: 30%;
  }
  button[name=sendfeed]
  {
    position: absolute;
  left: 40%;
  }
  select[name=sendfeed]
  {
    position: absolute;
    left: 70%;
  }
  textarea[name=feedb]
  {
    position: absolute;
    left: 10%;
    width: 100%;
  }
div[id=ee]
{
  position: relative;
  left: 40%;
  top: 50%;
}
</style>
<body>
  <div class="text-center">
  <form class="form-group" name="send" method="POST">
  	@csrf
    <h1>Оставить фидбек:</h1>
      <div class="form-inline">
    <font size="4px">Имя:</font>
    <input type="text" name="sendname" class="form-control" placeholder="Тарас" >
  </div>
  <br>
  <div class="form-inline">
    <font size="4px">Фамилия:</font>
    <input type="text" name="sendsur" class="form-control" placeholder="Кузнецов" >
  </div>
  <br>
  <div class="form-inline">
    <font size="4px">Email:</font>
    <input type="Email" name="sendmail" class="form-control" placeholder="taraskuznetsow@gmail.com" >
  </div>
  <br>
  <div class="md-form">
  <i class="fas fa-pencil-alt prefix"></i>
  <textarea name="feedb" class="md-textarea form-control" rows="5" maxlength="150" placeholder="Ваш отзыв:" ></textarea>
  <label for="form10">Ваш отзыв</label>
</div>
<br>
<br>
<br>
<br>
<br>

    <button type="sumbit" class="btn btn-outline-success" name="sendfeed">Оставить отзыв</button>
  </form>
</div>
  @if($errors->any())
    <div id="ee">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
@endif
@endsection