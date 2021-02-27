@extends('layouts.app')
@section('content')
<section id = "countdown-wrap"> 
      <div id ="countdown"></div>
    </section>

     <!--carousel slider for products-->
    <section id ="carousel">
      <div id="carouselExampleControls" class="carousel slide my-4" data-ride="carousel">
        <div class="carousel-inner">
          
          <div class="carousel-item active">
            <img class="img-rounded w-100" src="{{ asset('images/slide1.jpg')}}" alt="First slide">
            <div class="carousel-caption">
              <h3>40% off Black Friday</h3>
              <p>Laptops, Mobile Phones on sale!</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="img-rounded w-100" src="{{ asset('images/slide2.jpg')}}" alt="Second slide">
            <div class="carousel-caption">
              <h3>40% off Black Friday</h3>
              <p>Laptops, Mobile Phones on sale!</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="img-rounded w-100" src="{{ asset('images/slide3.jpg')}}" alt="Third slide">
            <div class="carousel-caption">
              <h3>40% off Black Friday</h3>
              <p>Laptops, Mobile Phones on sale!</p>
              </div>
          </div>
        </div>
      </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </section>
  
  <!--card section-->
  <section id = "card">
    <div class ="container">
    <div class = "row justify-content-center mb-4 pb-2">
      <div class="col-md-6 text-center">
      <h1 class ="headline load-hidden">Popular Products</h1>
      </div>
        </div>
    <div class = "row">  
    <div class="col-lg-4 col-md-6 mb-4">    
     <div class="card h-100">
    <img class="card-img-top" src="{{ asset('images/card1.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  </div>
    
  

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <img class="card-img-top" src="{{ asset('images/card2.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  
  <div class="col-lg-4 col-md-6 mb-4"> 
    <div class="card h-100">
      <img class="card-img-top" src="{{ asset('images/card3.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    </div>
    </div>
  </div>
</section>
@endsection