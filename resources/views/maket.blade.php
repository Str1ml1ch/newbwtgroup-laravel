<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@section('Main')
<head>
  <title>{{$title}}</title>
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
  form[name=reg]
  {
    position: relative;
    left: 35%;
    width: 30%;

  }
  button[name=rebut]
  {
  
  }
  select[name=regsel]
  {
    position: absolute;
    left: 70%;
  }
  li[id=sd]
  {
    position: absolute;
    left: 95%;
    background-color: pink;
    opacity: 0.8;
    border: 2px solid white;
    border-radius: 18px;
  }
</style>
<header>
  @if (Auth::check()==false)
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Registration<span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
         <a class="nav-link" href="entersite">Enter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="weather">Weather</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feedback">Send Feedback</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="watchfeed">Watch Feedback</a>
      </li>
    </ul>
  </div>
</nav>
  @endif
    @if (Auth::check()==true)
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="weather">Weather</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback">Send Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="watchfeed">Watch Feedback</a>
            </li>
            <li class="nav-item" id="sd">
              <a class="nav-link" href="exit">Exit</a>
            </li>
          </ul>
        </div>
      </nav>
      @endif
</header>
@show