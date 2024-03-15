
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="top-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">Hotel Sky Lounge</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"  aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/room">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          @if (Session::has('username'))
          
          @else
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
          @endif
          @if (Session::has('uuid'))
            <a class="nav-link" href="/customer">Booking History</a>
          @endif
        </ul>
      </div>
    </div>
</nav>