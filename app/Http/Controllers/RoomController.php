<?php

namespace App\Http\Controllers;

use App\Room;
use App\Session;
use Illuminate\Http\Request;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'floor'=>'required',
            'type'=>'required',
            'beds'=>'required'
        ]);

        Room::create([
            'name'=>$request->name,
            'floor'=>$request->floor,
            'type'=>$request->type,
            'beds'=>$request->beds
        ]);

        $request->session()->flash('msg', 'Room has been added');
        return redirect()->route('rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::find($room->id);
        return view('rooms.detail', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rooms = Room::find($id);
        return view('rooms.edit',compact('rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $request->validate([
            'name'=>'required',
            'floor'=>'required',
            'type'=>'required',
            'beds'=>'required'
        ]);

        $room = Room::find($id);
        $rooms->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
