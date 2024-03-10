<!-- room/index.blade.php -->

@extends('layouts.main')
@section('title', 'Room List')
@section('content')

<section id="rooms-section1">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Room List</h1>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Availability</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $room)
                                <tr>
                                    <td>{{ $room->id }}</td>
                                    <td>{{ $room->name }}</td>
                                    <td>${{ $room->price }}</td>
                                    <td>
                                        @if ($room->available)
                                        <span class="badge badge-success">Available</span>
                                        @else
                                        <span class="badge badge-danger">Not Available</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
