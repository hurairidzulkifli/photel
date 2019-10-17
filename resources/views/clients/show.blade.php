@extends('layouts.app')

@section('content');
<div class="container">
          <div class="card text-center">
                    <div class="card-header">
                      {{$client->name}}
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Client Particulars</h5>
                    
                      <img src="{{asset('uploads/person-male.png')}}" alt="Cannot View Avatar">
                      <p class="card-text">{{$client->email}}</p>
                      <p class="card-text">{{$client->phone}}</p>
                      <a href="{{route('clients')}}" class="btn btn-primary">View Client List</a>
                    </div>
                    <div class="card-footer text-muted">
                      pHotel
                    </div>
                  </div>

                  @if ($bookings)
                  <table class="table table-hover table-striped table-bordered mt-1">
                      <thead>
                      <tr>
                          <th>#Booking ID</th>
                          <th>Room</th>
                          <th>Booked At</th>
                          <th>Left At</th>
                          <th>Booked By</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($bookings as $booking)
                          <tr>
                              <td>{{ $booking->id }}</td>
                              <td><a href="/rooms/{{ $booking->room->id }}">{{ $booking->room->name }}</a></td>
                              <td>{{ $booking->start_date }}</td>
                              <td>{{ $booking->end_date }}</td>
                              <td>{{ $booking->user->name }}</td>
                          </tr>
                      @endforeach
                      </tbody>
                  </table>
          </div>
          @else
          <div class="card-footer">
              <h2 align=center>{{ $client->name }} has not booked rooms yet</h2>
            </div>
          @endif 
     
</div>

@endsection