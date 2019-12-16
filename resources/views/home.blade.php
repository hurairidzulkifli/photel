@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="card body">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-table fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Total Rooms</div>
                                        <div class="huge">{{ $rooms->count() }}</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('rooms.index')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        <br>
                    </div>
                    

                    <div class="col-lg-4 col-md-4">
                        <div class="card body">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Total Clients</div>
                                        <div class="huge">{{ $clients->count() }}</div>  
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('clients')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="card body">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-calendar-o fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div>Total Bookings</div>
                                            <div class="huge">{{ $bookings->count() }}</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('bookings.index')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="card body">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-id-card-o fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div>Administrator</div>
                                            <div class="huge">{{ $bookings->count() }}</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('users.index')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
