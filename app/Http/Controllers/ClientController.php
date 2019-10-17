<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Session;

class ClientController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::all();
        return view('clients.index',compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request )
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'image' => 'required|image'
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
            'image' => $request->image->getClientOriginalName()
        ]);

        // Stored a Message in session
        $request->session()->flash('msg', 'Client has been added');
        return redirect()->route('clients');
    }

    public function edit($id)
    {
        $clients = Client::find($id);
        return view('clients.edit',compact('clients'));
    }

    public function update($id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'image' => 'required|image'
        ]);

        // Check if there is any file
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move("uploads", $image->getClientOriginalName());
        }

        $clients->save();
        return redirect()->back();


    }

    public function show($id)
    {
        $clients = Client::find($id);
        return view('clients.show',compact('clients'));
    }

    public function destroy($id)
    {
        $clients = Client::find($id);
        $clients->destroy();

        return redirect()->route('clients.index');
    }
}
