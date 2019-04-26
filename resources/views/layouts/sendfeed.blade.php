<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<head>
<title>Send Feedback</title>
 <link rel="shortcut icon" href="http://s1.iconbird.com/ico/2014/1/567/w512h5121389807811officeaddressbookicon.png" type="image/png">
</head>
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

</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="registration">Registration<span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
         <a class="nav-link" href="entersite">Enter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="weather">Weather</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="feedback">Send Feedback</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="showfeed">Watch Feedback</a>
      </li>
    </ul>
  </div>
</nav>
  <div class="text-center">
  <form class="form-group" name="send">
    <h1>Оставить фидбек:</h1>
      <div class="form-inline">
    <font size="4px">Имя:</font>
    <input type="text" name="sendname" class="form-control">
  </div>
  <br>
  <div class="form-inline">
    <font size="4px">Фамилия:</font>
    <input type="text" name="sendsur" class="form-control" required>
  </div>
  <br>
  <div class="form-inline">
    <font size="4px">Email:</font>
    <input type="Email" name="sendmail" class="form-control">
  </div>
  <br>
  <div class="md-form">
  <i class="fas fa-pencil-alt prefix"></i>
  <textarea name="feedb" class="md-textarea form-control" rows="5"></textarea>
  <label for="form10">Ваш отзыв</label>
</div>
<br>
<br>
<br>
<br>
<br>
    <button type="button" class="btn btn-outline-success" name="sendfeed">Оставить отзыв</button>
  </form>
</div>