<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Client;
use App\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::latest()->get();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking = new Booking();
        $clients = Client::all();
        $rooms = Room::where('status', 1)->get();
        return view('bookings.create', compact('clients', 'rooms', 'booking'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the Form
        $request->validate([
            'client_id' => 'required',
            'room_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        // Save into Database
        Booking::create([
            'client_id' => $request->client_id,
            'room_id' => $request->room_id,
            'user_id' => auth()->user()->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        // Update Rooms status
        $room = Room::find($request->room_id);
        $room->status = 0;
        $room->save();

        session()->flash('msg', 'The Room Has been booked');

        return redirect()->route('bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //c
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        $clients = Client::all();
        $rooms = Room::where('status', 1)->get();
        return view('bookings.edit', compact('booking', 'clients', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->update($request->all());
        $request->session()->flash('msg', 'Booking has been updated');
        return redirect('/bookings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);
        // $request->session()->flash('msg', 'Booking has been deleted');
        return redirect('bookings');
    }

    public function cancel($room_id, $booking_id)
    {
        $booking = Booking::find($booking_id);
        $room = Room::find($room_id);
        $booking->status = 0;
        $booking->user_id = auth()->id();
        $booking->save();
        $room->status = 1;
        $room->save();
        session()->flash('msg', 'Booking has been canceled');
        return redirect('/bookings');
    }

    public function canceledBookings()
    {
        $canceledBookings = Booking::where('status', 0)->get();
        return view('bookings.canceled', compact('canceledBookings'));
    }
}
