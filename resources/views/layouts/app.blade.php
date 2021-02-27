<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>My Website</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

@include('inc.navbar')
        
        @yield('content')

    <!-- Footer section-->
<section id="footer">
  <div class="container">
    <div class="row text-center text-xs-center text-sm-left text-md-left">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Quick links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Videos</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Quick links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Videos</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Quick links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
          <li><a href="https://traineefinance.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
        <ul class="list-unstyled list-inline social text-center">
          <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
        </ul>
      </div>
      <hr>
    </div>	
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <p class="h6">© All right Reversed.<a class="text-green ml-2" href="#" target="_blank">SoftwareSolutions</a></p>
      </div>
      <hr>
    </div>	
  </div>
</section>
<!-- ./Footer -->
<div class="loader-wrapper">
  <span class="loader"><span class="loader-inner"></span></span>
</div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9+Y1QKtv3Rn7W3mgPxhU9KScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('Js/script.js')}}"></script>


