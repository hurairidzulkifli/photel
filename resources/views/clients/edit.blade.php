@extends('layouts.app')


@section('content')
@include('includes.errors')
<div class="container">
          <div class="card">
               <div class="card-header">Update Client Details</div>
               <div class="card-body">
                         <form action="{{ route('clients.update',['id'=>$clients->id]) }}" method="post" enctype="multipart/form-data"> 
                              {{csrf_field()}}
                              {{ method_field('PUT') }}
                              <div class="form-group">
                                  <label for="title">Name</label>
                                  <input type="text" name="name" value="{{$client->name}}" class="form-control">
                              </div>
                              <div class="form-group">
                                        <label for="title">Email</label>
                                        <input type="email" name="email" value="{{$client->email}}" class="form-control">
                              </div>
                              <div class="form-group">
                                        <label for="title">Contact Number</label>
                                        <input type="text" name="phone" value="{{$client->phone}}" class="form-control">
                              </div>
                              <div class="form-group">
                                        <label for="title">Contact Number</label>
                                        <input type="file" name="image" class="form-control">
                              </div>
                              <div class="form-group">
                                        <div class="text-center">
                                            <button class="btn btn-success" type="submit">
                                                Update
                                            </button>
                                        </div>
                                    
                                    </div>   
                                </form>
                            </div> 
                          <div class="card-footer">P Hotel</div>
               </div>
          </div>
     </div>
     

@endsection