<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Room List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('/')}}dist/asset/css/contactlist.css">
</head>
<body>

  <div class="container mt-4">
    <h2>Room List</h2>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($rooms as $room)
        <tr>
          <td scope="row">{{$room->iteration}}</td>
          <td>{{$room->name}}</td>
          <td>
            <form action="{{route('rooms.update',$room->id)}}" method="POST">
                @method('PUT')    
                @csrf
                <select name="status">
                  <option value="1" {{$room->status == 1 ? 'selected' : ''}}>Available</option>
                  <option value="0" {{$room->status == 0 ? 'selected' : ''}}>Unavailable</option>
                </select>
          </td>
          <td>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="{{asset('/')}}dist/asset/js/script.js"></script>
</body>
</html>
