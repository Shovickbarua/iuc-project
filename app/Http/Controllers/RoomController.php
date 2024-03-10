<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Session;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function show($uuid)
    {
        $booking = Booking::where('uuid', $uuid)->first(); 

        return view('bookings_list_single',compact('booking')); 
    }
    public function refund($uuid)
        {
            $booking = Booking::where('uuid', $uuid)->first(); 
            $booking->status = 'refund';
            $booking->save();
            Session::flash('success', 'Your money will be refunded via bkash/bank');
            return back();
        }

    public function index()
    {
        $rooms = Room::all();
        return view('rooms_list', compact('rooms'));
    }
}