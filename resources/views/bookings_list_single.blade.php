<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/bookinglist.css">
</head>
<body>

  <div class="container mt-4">
    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
    <h2>Booking List</h2>
    <a href="{{route('rooms.refund', $booking->uuid)}}" class="btn">Refund</a>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone No.</th>
          <th scope="col">Room</th>
          <th scope="col">Amount</th>
          <th scope="col">Type</th>
          <th scope="col">Status</th>
          <th scope="col">Check-in Date</th>
          <th scope="col">Check-out Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$booking->name}}</td>
          <td>{{$booking->email}}</td>
          <td>{{$booking->phone_number}}</td>
          <td>{{$booking->roomcategory}}</td>
          <td>{{$booking->price}}</td>
          <td>{{$booking->room}}</td>
          <td>{{$booking->status}}</td>
          <td>{{$booking->checkInDate}}</td>
          <td>{{$booking->checkOutDate}}</td>
        </tr>
        <!-- Add more rows here -->
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="{{asset('/')}}dist/asset/js/script.js"></script>
</body>
</html>
