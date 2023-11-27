<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/contactlist.css">
</head>
<body>

  <div class="container mt-4">
    <h2>Contact Us List</h2>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Subject</th>
          <th scope="col">Message</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        @foreach($contacts as $contact)
          <td scope="row">{{$loop->iteration}}</td>
          <td>{{$contact->name}}</td>
          <td>{{$contact->email}}</td>
          <td>{{$contact->subject}}</td>
          <td>{{$contact->message}}</td>
        @endforeach
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
