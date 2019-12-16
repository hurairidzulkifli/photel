@extends('layouts.app')


@section('content')
<div class="container">
     <div class="card">
          <div class="card-header">Add Room</div>
          <div class="card-body">
                    <form action="{{ route('rooms.store') }}" method="post"> 
                         {{csrf_field()}}
               <div class="form-group">
                    <label for="Name">Room Name</label>
                    <input type="text" name="name" id="name" class="form-control">
               </div>
               <div class="form-group">
                    <label for="Floor">Floor</label>
                    <select name=floor class="form-control">
                              <option value="Ground Floor">Ground Floor</option>
                              <option value="First Floor">First Floor</option>
                              <option value="Second Floor">Second Floor</option>
                              <option value="Sea View">Sea View</option>
                    </select>
               </div>
               <div class="form-group">
                         <label for="Floor">Type</label>
                         <select name=type class="form-control">
                                   <option value="Standard">Standard</option>
                                   <option value="Deluxe">Deluxe</option>
                                   <option value="Family Room">Family Room</option>
                         </select>
               </div>
               <div class="form-group">
                         <label for="Floor">Beds</label>
                         <select name=beds class="form-control">
                                   <option value="One Bed- Queen Size">One Bed- Queen Size</option>
                                   <option value="Twin Bed- King Size">Twin Bed- King Size</option>
                                   <option value="Queen Size 2x">Queen Size 2x</option>
                         </select>
               </div>
               <div class="form-group">
                         <div class="text-center">
                             <button class="btn btn-success " type="submit">
                                 Add Rooms
                             </button>
                             <a href="{{route('rooms.index')}}" class="btn btn-info" role="button">View Rooms</a>
                     </div>   
          </form>
          </div>
     </div>
</div>
@endsection