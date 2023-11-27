@extends('layouts.main')
@section('title', 'Gallery')
@section('content')

<div class="gallerypage ">
    <div class="gallery-heading ">
      <h3>Photo  <span>Gallery</span></h3>
    </div>
    <div class="card-content gallery-content" style="display: none">
      <div class="card gallery-card">
        <a href="{{asset('/')}}dist/asset/image/front-view.jpg" data-lightbox="models">
        <div class="card-image-gallery"><img src="{{asset('/')}}dist/asset/image/front-view.jpg" alt=""></div>
        </a>
      </div>
      <div class="card gallery-card">
        <a href="{{asset('/')}}dist/asset/image/lobby2.jpg" data-lightbox="models">
          <div class="card-image-gallery"><img src="{{asset('/')}}dist/asset/image/lobby2.jpg" alt=""></div>
        </a>
        </div>
        <div class="card gallery-card">
          <a href="{{asset('/')}}dist/asset/image/lobby.jpg" data-lightbox="models">
          <div class="card-image-gallery"><img src="{{asset('/')}}dist/asset/image/lobby.jpg" alt=""></div>
          </a>
        </div>
        <div class="card gallery-card">
          <a href="{{asset('/')}}dist/asset/image/gym (2).jpg" data-lightbox="models">
          <div class="card-image-gallery"><img src="{{asset('/')}}dist/asset/image/gym (2).jpg" alt=""></div>
          </a>
        </div>
        <div class="card gallery-card">
          <a href="asset/image/pool.jpg" data-lightbox="models">
          <div class="card-image-gallery"><img src="{{asset('/')}}dist/asset/image/pool.jpg" alt=""></div>
          </a>
        </div>
        <div class="card gallery-card">
          <a href="{{asset('/')}}dist/asset/image/laser tag.jpg" data-lightbox="models">
            <div class="card-image-gallery"><img src="{{asset('/')}}dist/asset/image/laser tag.jpg" alt=""></div>
          </a>
          </div>
        <div class="card gallery-card">
          <a href="{{asset('/')}}dist/asset/image/Spa.jpg" data-lightbox="models">
          <div class="card-image-gallery"><img src="{{asset('/')}}dist/asset/image/Spa.jpg" alt=""></div>
          </a>
        </div>
        <div class="card gallery-card">
          <a href="{{asset('/')}}dist/asset/image/Biliard zone.jpg" data-lightbox="models">
          <div class="card-image-gallery"><img src="{{asset('/')}}dist/asset/image/Biliard zone.jpg" alt=""></div>
          </a>
        </div>
        <div class="card gallery-card">
          <a href="{{asset('/')}}dist/asset/image/luxary room.jpg" data-lightbox="models">
            
          <div class="card-image-gallery"><img src="{{asset('/')}}dist/asset/image/luxary room.jpg" alt=""></div>
          </a>
        </div>
        <div class="card gallery-card">
          <a href="{{asset('/')}}dist/asset/image/deluxe room.jpg" data-lightbox="models">
          <div class="card-image-gallery"><img src="{{asset('/')}}dist/asset/image/deluxe room.jpg" alt=""></div>
          </a>
        </div>
        <div class="card gallery-card">
          <a href="{{asset('/')}}dist/asset/image/room-image4.jpg" data-lightbox="models">
          <div class="card-image-gallery"><img src="{{asset('/')}}dist/asset/image/room-image4.jpg" alt=""></div>
          </a>
        </div>
        <div class="card gallery-card">
          <a href="{{asset('/')}}dist/asset/image/room-image1.jpg" data-lightbox="models">
          <div class="card-image-gallery"><img src="{{asset('/')}}dist/asset/image/room-image1.jpg" alt=""></div>
          </a>
        </div>
      <div class="pagination">
        <!--<li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
        <li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
        <li class="page-item dots"><a class="page-link" href="#">...</a></li>
        <li class="page-item current-page"><a class="page-link" href="#">5</a></li>
        <li class="page-item current-page"><a class="page-link" href="#">6</a></li>
        <li class="page-item dots"><a class="page-link" href="#">...</a></li>
        <li class="page-item current-page"><a class="page-link" href="#">10</a></li>
        <li class="page-item next-page"><a class="page-link" href="#">Next</a></li>-->
      </div>
    </div>
</div>
@endsection