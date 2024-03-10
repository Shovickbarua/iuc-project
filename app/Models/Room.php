<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';

    // Define any relationships or additional methods here

public function showRoom($roomId)
{
    $room = Room::find($roomId); // Fetch the room data from the database
    return view('room', ['room' => $room]); // Pass the room data to the Blade file
}

}
