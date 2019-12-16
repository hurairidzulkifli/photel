@extends('layouts.app')


@section('content')
<div class="container">
     <div class="card">
          <div class="card-header">Administrator</div>
          <div class="card-body">
               <table class="table table-bordered">
                    <thead>
                         <tr>
                             <th>Name</th>
                             <th>Email</th>
                            </tr>
                    </thead>
                            <tbody>
                                 @foreach($users as $user)
                              <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                              </tr>
                              @endforeach
                         </tbody>
                    </table>
                    <a href="{{route('home')}}" class="btn btn-info" style="margin-left:475px;">Dashboard</a>
               </div>
          </div>
     </div>
</div>

@endsection