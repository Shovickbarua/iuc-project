<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Cancellation</title>
    <style>
        /* CSS styles */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .cancel-form {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .cancel-form input[type="submit"] {
            background-color: #ff5a5f;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .cancel-form input[type="submit"]:hover {
            background-color: #d3474e;
        }
    </style>
</head>
<body>

<div class="container">
    @if (Session::has('success'))
        <div class="alert alert-success text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
    <h2>Cancel Booking</h2>
    <div class="cancel-form">
            {{-- <input type="hidden" name="booking_id" value="{{ $booking->id }}"> --}}
            <p><strong>Booking ID:</strong> {{ $booking->id }}</p>
            <p><strong>Room:</strong> {{ $booking->name }}</p>
            <p><strong>Check-in Date:</strong> {{ $booking->checkInDate }}</p>
            <p><strong>Check-out Date:</strong> {{ $booking->checkOutDate }}</p>
            <p><strong>Advance Paid:</strong> ${{ $booking->price }}</p>
            <p>Are you sure you want to cancel this booking?</p>
            @php
                $createdAt = \Carbon\Carbon::parse($booking->created_at);
                $currentDate = \Carbon\Carbon::now();
                $differenceInDays = $currentDate->diffInDays($createdAt);
            @endphp
        
            {{-- Show cancel button only if created more than 1 day ago --}}
            @if ($differenceInDays > 1)
                {{-- <a href="{{ route('rooms.refund', $booking->uuid) }}" type="submit">Cancel</a> --}}
            @else
                <a href="{{ route('rooms.refund', $booking->uuid) }}" type="submit">Cancel</a>
            @endif
    </div>
</div>

</body>
</html>