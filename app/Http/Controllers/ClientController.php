<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Client;
use Illuminate\Http\Request;
use Session;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $bookings = Booking::all();
        $clients = Client::all();
        return view('clients.index', compact('clients', 'bookings'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'image' => 'required|image',
        ]);

        // Check if there is any file
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move("uploads", $image->getClientOriginalName());
        }

        // Store into Database
        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $request->image->getClientOriginalName(),
        ]);

        // Stored a Message in session
        $request->session()->flash('msg', 'Client has been added');
        return redirect()->route('clients');
    }

    public function edit($id)
    {
        $clients = Client::find($id);
        return view('clients.edit', compact('clients'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'image' => 'required|image',
        ]);

        // Check if there is any file
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move("uploads", $image->getClientOriginalName());
        }

        $client->save();
        return redirect()->back();

    }

    public function show($id)
    {
        $bookings = Booking::where('client_id', $id)->get()->all(); //specific booking to user id
        $client = Client::find($id);
        return view('clients.show', compact('client', 'bookings'));
    }

    public function destroy($id)
    {
        $clients = Client::find($id);
        $clients->destroy();

        return redirect()->route('clients.index');
    }
}
