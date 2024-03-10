<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Home')</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"> 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/nav-footer.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/index.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/responsive.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/gallery.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/nav-footer.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/lightbox.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/contactlist.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/contact.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/nav-footer.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/bookinglist.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/rooms.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/services.css">
    <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/sidebar.css">
</head>
<body>
    @include('navbars.navbar')

    <div>
        @yield('content')
    </div>

    @include('footers.footer')
</body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="{{asset('/')}}dist/asset/js/shrink-navbar.js"></script>
  <script src="{{asset('/')}}dist/asset/js/gallery.js"></script>
  <script src="{{asset('/')}}dist/asset/js/shrink-navbar.js"></script>
  <script src="{{asset('/')}}dist/asset/js/lightbox-plus-jquery.js"></script>
  <script src="{{asset('/')}}dist/script.js"></script>
  <script src="{{asset('/')}}dist/asset/js/rooms.js"></script>
</html>