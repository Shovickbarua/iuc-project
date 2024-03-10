@extends('layouts.main')

@section('content')
<div class="home-page">
    <div id="roomCarousel" class="carousel carousel-slide" data-interval="5000" data-ride="carousel">
      <ol class="carousel-indicators carousel">
        <li data-target="#roomCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#roomCarousel" data-slide-to="1"></li>
        <li data-target="#roomCarousel" data-slide-to="2"></li>
        <li data-target="#roomCarousel" data-slide-to="3"></li>
        <li data-target="#roomCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('/')}}dist/asset/image/front-view.jpg" alt="front-view" class="slider-img">
          <div class="carousel-caption ">
            <h1 class="slider-title">Welcome to Our Hotel</h1>
            <h2>Experience luxury and comfort</h2>
          </div>
         </div>
        <div class="carousel-item">
          <img src="{{asset('/')}}dist/asset/image/lobby2.jpg" alt="lobby" class="slider-img">
          <div class="carousel-caption">
            <h1 class="slider-title">Welcome to Our Hotel</h1>
          <h2>Experience luxury and comfort</h2>
        </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('/')}}dist/asset/image/contactus3.jpg" alt="Room" class="slider-img">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="slider-title">Welcome to Our Hotel</h1>
            <h2>Experience luxury and comfort</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('/')}}dist/asset/image/pool2.jpg" alt="yard" class="slider-img">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="slider-title">Welcome to Our Hotel</h1>
          <h2>Experience luxury and comfort</h2>
        </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('/')}}dist/asset/image/deluxe room (1).jpg" alt="swimmingpool" class="slider-img">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="slider-title">Welcome to Our Hotel</h1>
          <h2>Experience luxury and comfort</h2>
        </div>
        </div>
      </div>
      <a class="carousel-control-prev " href="#roomCarousel"  role="button" data-slide="prev">
        <span class="carousel-control-prev-icon slider-arrow" aria-hidden="true"></span>
        <span class="visually-hidden d-none">Previous</span>
      </a>
      <a class="carousel-control-next" href="#roomCarousel"  role="button" data-slide="next">
        <span class="carousel-control-next-icon slider-arrow" aria-hidden="true"></span>
        <span class="visually-hidden d-none">Next</span>
      </a>
    </div>
    <!-- slider end -->
                                                  <!-- Our room -->
   <div class="our-room-section-site">
      <div class="container">
  <div class="row">
    <div class="col-md-12 mb-5 text-center">
        <h1 class="room-section-heading">Our Rooms</h1>
    </div>
  </div>

<div class="row">
  <div class="col-md-4 mb-5 ">
    <div class="hotel-room">
      <img src="{{asset('/')}}dist/asset/image/room-image2.jpg" class="homeourimage-card" alt="Single Room">
      <div class="hotel-room-body">
        <a class="roomcard-title" href="{{ url('/room#rooms-section1') }}" style="text-decoration: none;">Single Room</a>
        <p class="roomcard-text1">Cozy and comfortable single room.</p>
        <p class="roomcard-text2">$100</p>
        <p class="roomcard-text3 my-2">Per Night</p>
      </div>
    </div>
  </div>
    <div class="col-md-4 mb-5 ">
      <div class="hotel-room">
        <img src="{{asset('/')}}dist/asset/image/room-image4.jpg" class="homeourimage-card" alt="Single Room">
        <div class="hotel-room-body">
          <a class="roomcard-title" href="{{ url('/room#rooms-section2') }}" style="text-decoration: none;">Deluxe Room</a>
          <p class="roomcard-text1">Cozy and comfortable.</p>
          <p class="roomcard-text2">$200</p>
          <p class="roomcard-text3 my-2">Per Night</p>
        </div>
      </div>
    </div>
      <div class="col-md-4 mb-5 ">
        <div class="hotel-room">
          <img src="{{asset('/')}}dist/asset/image/deluxe room.jpg" class="homeourimage-card" alt="Single Room">
          <div class="hotel-room-body">
            <a class="roomcard-title"  href="{{ url('/room#rooms-section3') }}" style="text-decoration: none;">Couple Room</a>
            <p class="roomcard-text1">Cozy and comfortable.</p>
            <p class="roomcard-text2">$300</p>
            <p class="roomcard-text3 my-2">Per Night</p>
          </div>
        </div>
      </div>
        <div class="col-md-4 mb-5">
          <div class="hotel-room">
            <img src="{{asset('/')}}dist/asset/image/family room.jpg" class="homeourimage-card" alt="Single Room">
            <div class="hotel-room-body">
              <a class="roomcard-title" href="{{ url('/room#rooms-section4') }}" style="text-decoration: none;">Presidental Suite</a>
              <p class="roomcard-text1">Cozy and comfortable.</p>
              <p class="roomcard-text2">$500</p>
              <p class="roomcard-text3 my-2">Per Night</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5 ">
          <div class="hotel-room">
            <img src="{{asset('/')}}dist/asset/image/room-image1.jpg" class="homeourimage-card" alt="Single Room">
            <div class="hotel-room-body">
              <a class="roomcard-title" href="{{ url('/room#rooms-section5') }}" style="text-decoration: none;">Royal Suite</a>
              <p class="roomcard-text1">Cozy and comfortable single room.</p>
              <p class="roomcard-text2">$600</p>
              <p class="roomcard-text3 my-2">Per Night</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5 ">
          <div class="hotel-room">
            <img src="{{asset('/')}}dist/asset/image/luxary room.jpg" class="homeourimage-card" alt="Single Room">
            <div class="hotel-room-body">
              <a class="roomcard-title" href="{{ url('/room#rooms-section6') }}" style="text-decoration: none;">Executive Suite</a>
              <p class="roomcard-text1">Cozy and comfortable single room.</p>
              <p class="roomcard-text2">$800</p>
              <p class="roomcard-text3 my-2">Per Night</p>
            </div>
          </div>
        </div>
</div>
   </div>
  </div>
                                                 <!--ABOUT US-->
  <div class="about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img src="{{asset('/')}}dist/asset/image/front-view.jpg" alt="Hotel Paradise" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
          <h2 class="mb-6">About Us</h2>
          <p>Welcome to Hotel Sky Lounge,where luxury meets tranquility.Our establishment offers a unique blend of modern amenities and classic elegance,ensuring an unforgettable experience for our guests.With a range of facilities including a spa,fitness center,and elegant event spaces, we cater to both leisure and business travelers.Our dedicated staff is committed to providing exceptional service, making your stay truly special.</p>
          <p>Complimentary breakfast,high-speed Wi-Fi,and attentive concierge services are just a few of the features that await you at Hotel Paradise.We invite you to indulge in a world of comfort and indulgence.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Services Section -->
  <div class="home-services px-3 py-5">
    <h2 class="text-center services-title">Services that Hotel Sky Lounge provide </h2>
    <!-- Service Cards -->
    <div class="row">
        <div class="col-sm-3 mb-4">    
            <div class="services-card">
                <img src="{{asset('/')}}dist/asset/image/swimming pool.jpeg" class="card-img-top services-image" alt="Service 1">
                <div class="services-card-body">
                    <h5 class="services-card-title">The Infinity Pool</h5>
                    <a href="{{ url('/service#service-section1') }}" class="services-view">View More</a>
                </div>
            </div> 
        </div>
        <div class="col-sm-3 mb-4">
            <div class="services-card">
                <img src="{{asset('/')}}dist/asset/image/restaurant.jpg" class="card-img-top services-image" alt="Service 2">
                <div class="services-card-body">
                    <h5 class="services-card-title">Restaurant</h5>
                    <a href="{{ url('/service#service-section2') }}" class="services-view">View More</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-4">
            <div class="services-card">
                <img src="{{asset('/')}}dist/asset/image/gym (2).jpg" class="card-img-top services-image" alt="Service 3">
                <div class="services-card-body">
                    <h5 class="services-card-title ">Gym</h5>
                    <a href="{{ url('/service#service-section3') }}" class="services-view">View More</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-4">
          <div class="services-card">
              <img src="{{asset('/')}}dist/asset/image/Biliard zone.jpg" class="card-img-top services-image" alt="Service 3">
              <div class="services-card-body">
                  <h5 class="services-card-title ">Billiard Zone</h5>
                  <a href="{{ url('/service#service-section4') }}" class="services-view">View More</a>
              </div>
          </div>
        </div>
    </div>
</div>

    <div class="home-map ">
      <h2 class="text-center homemap-title">Location</h2>
      <p class="hopemap-details px-5">The Hotel Pradise, Chittagong is conveniently located within touching distance to prominent tourist attractions in and around Chittagong. Our hotel in Chittagong is also the perfect destination for a blissful getaway from Dhaka. Enjoy our warm hospitality and service that make you feel at home. Explore the all meals inclusive 4D Travel offer to plan your next stay.<p>

      <div class="row mapsize">    
        <!-- Add your map code here (e.g., using Google Maps) -->
          <div class=" col map-container">
              <!-- Add your map embed code here -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.781722834278!2d91.81870947103317!3d22.361869295692408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd972a7c0913d%3A0xa89bedab30fca683!2sAscii%20System!5e0!3m2!1sen!2sbd!4v1695225952836!5m2!1sen!2sbd"width="1350" height="350"class="home-map-size"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div> 
    </div>
  </div>

@endsection