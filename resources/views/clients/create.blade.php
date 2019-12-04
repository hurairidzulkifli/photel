@extends('layouts.app')


@section('content')
@include('includes.errors')
<div class="container">
     <div class="card">
          <div class="card-header">Add Client</div>
          <div class="card-body">
                    <form action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data"> 
                         {{csrf_field()}}
                         <div class="form-group">
                             <label for="title">Name</label>
                             <input type="text" name="name" class="form-control">
                         </div>
                         
                         <div class="form-group">
                                   <label for="title">Email</label>
                                   <input type="email" name="email" class="form-control">
                         </div>
                         <div class="form-group">
                                   <label for="title">Contact Number</label>
                                   <input type="text" name="phone" class="form-control">
                         </div>
                         <div class="form-group">
                                   <label for="title">Image</label>
                                   <input type="file" name="image" class="form-control">
                         </div>
                         <div class="form-group">
                                   <div class="text-center">
                                       <button class="btn btn-success " type="submit">
                                           Add
                                       </button>
                                       <a href="{{route('clients')}}" class="btn btn-info" role="button">View Clients</a>
                               </div>   
                           </form>
                       </div> 
                     <div class="card-footer">P Hotel</div>
          </div>
     </div>
</div>

@endsection