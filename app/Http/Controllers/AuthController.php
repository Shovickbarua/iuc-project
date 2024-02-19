<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use App\Models\Booking;
use App\Models\Contact;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("home");
    }
    public function room()
    {
        return view("rooms");
    }
    public function gallery()
    {
        return view("gallery");
    }
    public function contact()
    {
        return view("contact");
    }
    public function service()
    {
        return view("services");
    }
    public function getBooking()
    {
        $bookings = Booking::all();
        return view("bookings_list",compact("bookings"));
    }
    public function getContact()
    {
        $contacts = Contact::all();
        return view("contact_list",compact("contacts"));
    }
    public function contactSave(Request $request)
    {
        $contact = new Contact;

        $contact-> name = $request->name;  
        $contact-> email = $request->email;  
        $contact-> subject = $request->subject;  
        $contact-> message = $request->message;  
        $contact-> save();

        // dd($request);

        return redirect(route("contact"));
    }
    public function bookSave(Request $request)
    {
        $book = new Booking;
        
        $book-> name = $request->name;  
        $book-> email = $request->email;  
        $book-> phone_number = $request->phone_number;  
        $book-> roomcategory = $request->roomcategory;  
        $book-> room = $request->room;  
        // dd($request->price);
        $book-> price = $request->price;  
        $book-> checkInDate = $request->checkInDate;  
        $book-> checkOutDate = $request->checkOutDate;  
        $book-> save();

        session([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone_number,
            'room' => $request->room,
            'price' => $request->price,
        ]);

        return redirect(route("stripe.form"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     */
    public function show(Auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
