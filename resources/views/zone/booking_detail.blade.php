@extends('zone.layout.app')
@section('title','Zone | Booking Detail')
@section('content')
    <section class="inner-banner">
        <div class="zt-container">
            <div class="box clearfix">
                <h2>Booking Information Detail</h2>
            </div>
        </div>
    </section>
    <div class="zt-container">
        <div class="row">
            <div class="col-md-12 col-sm-5 col-xs-12" >
                <div class="destination-sidebar-wrap sidebar-box">
                    <div class="sidebar-book sidebar-content">
                        <a href="{{route('goBookingList',Auth::id())}}" class="btn zt-primary btn-lg">Back</a>
                        @include('zone.layout.error')
                        <table class="table table-striped">
                            <tr>
                                <th width="200px">Tour Package</th>
                                <td>{{$booking->packages->title}}</td>
                            </tr>
                            <tr>
                                <th>Route Information</th>
                                <td>{{$booking->routes->from_city}} -> {{$booking->routes->to_city}}</td>
                            </tr>
                            <tr>
                                <th>Transport Type</th>
                                <td>{{$booking->routes->type}}</td>
                            </tr>
                            <tr>
                                <th>Hotel Name</th>
                                <td>{{$booking->hotels->name}}</td>
                            </tr>
                            <tr>
                                <th>Departure Date</th>
                                <td>{{$booking->departure_date}}</td>
                            </tr>
                            <tr>
                                <th>Number of people</th>
                                <td>{{$booking->qty}}</td>
                            </tr>
                            <tr>
                                <th>Estimate Price</th>
                                <td>{{$booking->total_price}}</td>
                            </tr>
                            <tr>
                                <th>Confirm Price</th>
                                <td>{{$booking->confirm_price}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$booking->status}}</td>
                            </tr>
                            <tr>
                                <th>Admin Message</th>
                                <td>
                                    {{$booking->admin_msg}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection