@extends('layouts.app')


@section('content')
<div class="container">
     <div class="card">
          <div class="card-header">Clients List</div>
          <div class="card-body">
               <div class="form-group">
                    <a href="{{route('clients.create')}}" class="btn btn-primary" role="button">Add Clients</a>
               </div>
               <div class="table-responsive">          
                    <table class="table table-bordered">
                         <thead>
                              <tr>
                                   <th>ID</th>
                                   <th>Avatar</th>
                                   <th>Name</th>
                                   <th>Email</th>
                                   <th>Contact Number</th>
                                   <th>Action</th>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach($clients as $client)
                              <tr>
                                   <td>{{$client->id}}</td>
                                   <td><img src="{{ asset('uploads/person-male.png') }}" alt="{{ $client->name}}" width="60px" height="60px"></td>
                                   <td>{{$client->name}}</td>
                                   <td>{{$client->email}}</td>
                                   <td>{{$client->phone}}</td>
                                   <td><a href="{{route('clients.edit',['id'=> $client->id])}}" class="badge badge-dark">Edit</a>
                                        <form action="{{ route('clients.destroy',['id'=> $client->id]) }}" method="get">
                                             {{csrf_field() }}
                                             {{method_field('DELETE')}}
                                             <button class="badge badge-danger" type="submit">Delete</button>     
                                        </form>
                                   </td>
                              @endforeach
                              </tr>
                         </tbody>
               </table>
               <a href="{{route('home')}}" class="btn btn-info" style="margin-left:470px;">Dashboard</a>
          </div>
     </div>
</div>

@endsection