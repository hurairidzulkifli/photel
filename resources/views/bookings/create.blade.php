@extends('layouts.app')

@section('content')

<div class="container">
    @include('includes.errors')
     <div class="card">
          <div class="card-header">Book A Room</div>
          <div class="card-body">
                <form action="{{ route('bookings.store') }}" method="post"> 
                        {{csrf_field()}}
               <div class="form-group">
                    <label for="category">Select a Client</label>
                    <select name="client_id" id="client" class="form-control">
                        @foreach($clients as $client)
                        <option value="{{$client->id}}">{{$client->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Select a Room</label>
                    <select name="room_id" id="room" class="form-control">
                        @foreach($rooms as $room)
                        <option value="{{$room->id}}">{{$room->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                     <label for="Start Date">Start Date</label>
                     <input type="date" name="start_date" id="start_date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="End Date">End Date</label>
                    <input type="date" name="end_date" id="end_date" class="form-control">
               </div>
               <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Book Room
                        </button>
                        <a href="{{route('rooms.index')}}" class="btn btn-info" role="button">View Room</a>
                </div>   
            </form>
        </div> 
      <div class="card-footer">P Hotel</div>
    
          </div>
     </div>
</div>
@endsection