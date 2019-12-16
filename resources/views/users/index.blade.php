@extends('layouts.app')


@section('content')
<div class="table table-bordered">
     <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
             </tr>
             <tbody>
                  @foreach($users as $user)
               <tr>
                 <td>{{$user->name}}</td>
                 <td>{{$user->email}}</td>
               </tr>
               @endforeach
     </thead>
</div>

@endsection