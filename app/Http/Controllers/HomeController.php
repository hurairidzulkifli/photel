<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Client;
use App\Room;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        $clients = Client::all();
        $bookings = Booking::all();
        $users = User::all();
        return view('home', compact('rooms', 'clients', 'bookings'));
    }
}
