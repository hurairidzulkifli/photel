@extends('layouts.app')


@section('content')

<h2 align="center">pHotel Rooms</h2>
<div class="container">
     <div class="row">
 @foreach($rooms as $room)
 <div class="card-deck">
          <div class="card" style="width: 18rem;">
            <img src="{{asset('uploads/2.jpg')}}"  style="width:287px; height:250;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$room->type}}</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p>{{$room->name}}</p>
              <p>{{$room->beds}}</p>
              <p>{{$room->floor}}</p>
              <td>
                @if ($room->status)
                <span class="badge badge-pill badge-success">Available</span>
                @else
                <span class="badge badge-pill badge-danger">Booked</span>
                @endif
            </td>
            </div>
            <div class="card-footer">
                    <small class="text-muted">{{$room->created_at}}</small>
          </div>
          </div>
          @endforeach
        </div>
     </div>
</div>
@endsection
