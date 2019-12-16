@extends('layouts.app')


@section('content')
<div class="card">
    <div class="card-body">
      <div class="container">
        <div class="row">
            @foreach($rooms as $room)
                <div class="card-deck mx-auto">
                      <div class="card" style="width: 18rem;">
                          <img src="{{asset('uploads/2.jpg')}}"  style="width:287px; height:250;" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title">{{$room->type}}</h5>
                              <p class="card-text">Lorem Ipsum</p>
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
                                  <a href="{{route('rooms.edit',['id'=>$room->id])}}" class="badge badge-dark float-right">Edit</a>
                          </div>
                      </div>
                        @endforeach
                </div>    
          </div>
      </div>
  </div>
      <br>
      <a href="{{route('home')}}" class="btn btn-info" style="margin-left:500px;">Dashboard</a>
</div>
@endsection
