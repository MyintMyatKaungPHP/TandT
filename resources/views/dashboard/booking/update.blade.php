@extends('dashboard.layout.app')
@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Reply Tour Information
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <a href="{{route('manage_booking.index')}}" class="btn btn-labeled btn-outline-info">
                           <span class="btn-label"><i class="fa fa-arrow-left"></i>
                           </span>Back
                </a>
                <div class="card card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-2">
                                <b>User Name</b>
                            </div>
                            <div class="col-xl-10">
                                <p>{{$booking->users->name}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>User Email</b>
                            </div>
                            <div class="col-xl-10">
                                <p>{{$booking->users->email}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Package Name</b>
                            </div>
                            <div class="col-xl-10">
                                <p>{{$booking->packages->title}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Duration</b>
                            </div>
                            <div class="col-xl-10">
                                <p>{{$booking->packages->duration}} day(s)</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Number of People</b>
                            </div>
                            <div class="col-xl-10">
                                <p>{{$booking->qty}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Departure Date</b>
                            </div>
                            <div class="col-xl-10">
                                <p>{{$booking->departure_date}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Route</b>
                            </div>
                            <div class="col-xl-10">
                                <p>{{$booking->routes->from_city}} <em class="fa fa-arrow-right"></em> {{$booking->routes->to_city}} </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Type</b>
                            </div>
                            <div class="col-xl-10">
                                <p>{{$booking->routes->type}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Hotel</b>
                            </div>
                            <div class="col-xl-10">
                                <p>{{$booking->hotels->name}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Estimate Price</b>
                            </div>
                            <div class="col-xl-10">
                                {{$booking->total_price}} Kyats
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>User Massage</b>
                            </div>
                            <div class="col-xl-10">
                                {{$booking->user_msg}}
                            </div>
                        </div>
                        <hr>
                        <form class="form-horizontal" method="post" action="{{route('manage_booking.update',$booking->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="row">
                                <div class="col-xl-2">
                                    <b>Confirm Price</b>
                                </div>
                                <div class="col-xl-10">
                                    <input name="confirm_price" type="number" min="1" value="{{$booking->total_price}}"> Kyats
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-xl-2">
                                    <b>Message to Customer</b>
                                </div>
                                <div class="col-xl-10">
                                    <textarea name="admin_msg" id="" rows="10" class="form-control">{{$booking->admin_msg}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-10">
                                    <button class="btn btn-sm btn-green" type="submit">Reply</button>
                                    <button class="btn btn-sm btn-secondary" type="reset">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection