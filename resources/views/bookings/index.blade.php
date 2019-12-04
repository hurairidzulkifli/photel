@extends('layouts.app')

@section('content')
<div class="container">
     <div class="card">
          <div class="card-header">Booking List</div>
          <div class="card-body">
               <a href="{{route('bookings.create')}}" class="btn btn-primary">Book A Room</a><br>
               <br>
               <div class="table-responsive">          
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                              <th>Booking ID</th>
                              <th>Client</th>
                              <th>Room</th>
                              <th>Floor</th>
                              <th>Type</th>
                              <th>Booked At</th>
                              <th>Booking End</th>
                              <th>Booked By</th>
                              <th>Status</th>
                              <th>Action</th>
                         </tr>
                    </thead>
                    @foreach($bookings as $booking)
                    <tbody>  
                         <td>{{ $booking->id }}</td>
                         <td><a href="clients/show/{{ $booking->client->id }}">{{ $booking->client->name }}</a></td>
                         <td>{{ $booking->room->name }}</td>
                         <td>{{ $booking->room->floor }}</td>
                         <td>{{ $booking->room->type }}</td>
                         <td>{{ $booking->start_date }}</td>
                         <td>{{ $booking->end_date }}</td>
                         <td>{{ $booking->user->name }}</td>
                         <td>
                                   @if ($booking->status)
                                   <span class="badge badge-pill badge-success">Booked</span>
                                   @else
                                   <span class="badge badge-pill badge-secondary">Available</span>
                                   @endif
                               </td>
                         <td>
                              <a href="{{route('bookings.edit',['id'=>$booking->id])}}" class="badge badge-pill badge-dark">Edit</a>
                              <form action="{{ route('bookings.destroy',['id'=> $booking->id]) }}" method="post">
                                   {{csrf_field() }}
                                   {{method_field('DELETE')}}
                                   <button class="badge badge-pill badge-danger" type="submit">Delete</button>     
                              </form>
                              @if($booking->status==1)
                              <form action="{{ route('bookings.cancel',['id'=> $booking->id,'room_id'=>$booking->room_id]) }}"method="post">
                                        {{csrf_field() }}
                                        <button class="badge badge-pill badge-warning" type="submit">Cancel</button>     
                              </form>
                              @endif
                         </td>
                         @endforeach
                    </tbody>
          </div>
     </div>
</div>
</div>
@endsection