@extends('layouts.app')


@section('content')
<h2 align="center"> <p>{{$room->name}}</p></h2>
<div class="container">
     <div class="row">
               <div class="card mb-3 mx-auto" style="max-width: 1000px;">
                         <div class="row no-gutters">
                                <div class="col-md-4">
                                        <img src="{{asset('uploads/2.jpg')}}" width="200px" height="300px" class="card-img-top" alt="...">
                                </div>
                                <div class="col-md-8">
                                   <div class="card-body">
                                        <h5 class="card-title">Room Details</h5>
                                        <p class="card-text"><img src="{{asset('/uploads/family.png')}}" width="50px" height="50px"alt="">&nbsp;&nbsp;{{$room->type}}</p>
                                        <p class="card-text"><img src="{{asset('/uploads/stairs.png')}}" width="50px" height="50px"alt="">&nbsp;&nbsp;{{$room->floor}}</p>
                                        <p class="card-text"><img src="{{asset('/uploads/beds.png')}}" width="50px" height="50px"alt="">&nbsp;&nbsp;{{$room->beds}}</p>
                                        <p class="card-text"><small class="text-muted">{{$room->created_at}}</small></p>
                                   </div>
                                </div>
                         </div>
               </div>
               
     </div>
     <div class="form-group">
          <div class="text-center">
               <a href="{{route('rooms.index')}}" class="btn btn-primary">Back</a>
          </div>
     </div>
</div>

@endsection
{{-- <div class="card mb-3 mx-auto" style="max-width: 540px;">
     <div class="row no-gutters">
            <div class="col-md-4">
                    <img src="{{asset('uploads/2.jpg')}}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-8">
               <div class="card-body">
                    <h5 class="card-title">Room Details</h5>
                    <p class="card-text"><img src="{{asset('/uploads/family.png')}}" width="50px" height="50px"alt="">&nbsp;&nbsp;{{$room->type}}</p>
                    <p class="card-text"><img src="{{asset('/uploads/stairs.png')}}" width="50px" height="50px"alt="">&nbsp;&nbsp;{{$room->floor}}</p>
                    <p class="card-text"><img src="{{asset('/uploads/beds.png')}}" width="50px" height="50px"alt="">&nbsp;&nbsp;{{$room->beds}}</p>
                    <p class="card-text"><small class="text-muted">{{$room->created_at}}</small></p>
               </div>
            </div>
     </div>
</div> --}}