@extends('layouts.app')

@section('content');
<div class="container">
          <div class="card text-center">
                    <div class="card-header">
                      {{$clients->name}}
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Client Particulars</h5>
                    
                      <img src="{{asset('uploads/person-male.png')}}" alt="Cannot View Avatar">
                      <p class="card-text">{{$clients->email}}</p>
                      <p class="card-text">{{$clients->phone}}</p>
                      <a href="{{route('clients')}}" class="btn btn-primary">View Client List</a>
                    </div>
                    <div class="card-footer text-muted">
                      pHotel
                    </div>
                  </div>
     
</div>

@endsection