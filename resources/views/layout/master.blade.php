<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home --Rahat</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<link rel="stylesheet" href="{{asset('css/custom.css')}}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="sliderengine/jquery.js"></script>
<script src="sliderengine/amazingslider.js"></script>
<script src="sliderengine/initslider-1.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!--Font link -->  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400i" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>

  </head>
  <body style="background-image: url(/images/backgr.jpg)">

    <nav class="navbar navbar-default navbar-custom">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav dropdown link1">
        <li><a href="/" class="brand-logo" id="logo" style=" color:#ffff;font-family: 'Bungee Shade';font-size:40px; font-weight: 400;">Rahat</a></li>
      </ul>

      <ul class="nav navbar-nav">
        <li><a style="color: #fff; text-decoration: none; font-size:22px;font-family: 'IBM Plex Sans', sans-serif;" href="/affected">Affected Areas</a></li>
      </ul>


      <ul class="nav navbar-nav dropdown">
        <li class="dropdown">
          <a style="color: #fff; text-decoration: none; font-size:22px;font-family: 'IBM Plex Sans', sans-serif;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Donors<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-content">
            <li><a style="text-decoration: none; font-size:18px;font-family: 'IBM Plex Sans', sans-serif;" href="/donors">Our Donors</a></li>
            <li><a style="text-decoration: none; font-size:18px;font-family: 'IBM Plex Sans', sans-serif;" href="/becomedonor">Become a Donor</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav ">
        <li><a style="color: #fff; text-decoration: none; font-size:22px;font-family: 'IBM Plex Sans', sans-serif;" href="/donations">Donations</a></li>
      </ul>

      <ul class="nav navbar-nav">
        <li><a style="color: #fff; text-decoration: none; font-size:22px;font-family: 'IBM Plex Sans', sans-serif;" href="/request">Request Relief</a></li>
      </ul>


      <ul class="nav navbar-nav">
        <li><a style="color: #fff; text-decoration: none; font-size:22px;font-family: 'IBM Plex Sans', sans-serif;" href="/about">About Us</a></li>
      </ul>

      <ul class="nav navbar-nav">
        <li><a style="color: #fff; text-decoration: none; font-size:22px;font-family: 'IBM Plex Sans', sans-serif;" href="/sms">Received SMS</a></li>
      </ul>

    </div>
  </div>
</nav>
@yield('content')

<footer id="footer">
  <div class="social">
    <h3>Social Links</h3>
    <div class="social-list">
      <button class="social-btn" href="#">
        <i class="fa fa-linkedin-square fa-4x"></i>
        <p>LinkedIn</p>
      </button>
      <button class="social-btn" href="#">
        <i class="fa fa-google-plus-square fa-4x"></i>
        <p>Google+</p>
      </button>
      <button class="social-btn" href="#">
        <i class="fa fa-git-square fa-4x"></i>
        <p>Git</p>
      </button>
      <button class="social-btn" href="#">
        <i class="fa fa-twitter-square fa-4x"></i>
        <p>Twitter</p>
      </button>
      <button class="social-btn" href="#">
        <i class="fa fa-youtube-square fa-4x"></i>
        <p>Youtube</p>
      </button>
      <button class="social-btn" href="#">
        <i class="fa fa-instagram fa-4x"></i>
        <p>Instagram</p>
      </button>
      <button class="social-btn" href="#">
        <i class="fa fa-envelope-square fa-4x"></i>
        <p>Email</p>
      </button>
      <button class="social-btn" href="#">
        <i class="fa fa-skype fa-4x"></i>
        <p>Skype</p>
      </button>
    </div>
  </div>
  <div class="contact">
    <h3>Made By Team BernHardt</h3>

  </div>
</footer>

  </body>
</html>
