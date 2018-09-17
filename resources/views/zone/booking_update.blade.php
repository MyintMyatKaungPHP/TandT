@extends('zone.layout.app')
@section('title','Zone | Booking List')
@section('content')
    <section class="inner-banner">
        <div class="zt-container">
            <div class="box clearfix">
                <h2>Tour Booking Updating</h2>
            </div>
        </div>
    </section>
    <div class="zt-container">
        <div class="row">
            <div class="col-md-12 col-sm-5 col-xs-12" >
                <div class="destination-sidebar-wrap sidebar-box">
                    <div class="sidebar-header">
                        <h3 class="title">Booking Update</h3>
                    </div>
                    <div class="sidebar-book sidebar-content">
                        @include('zone.layout.error')
                        <form class="form filter-box" enctype="multipart/form-data" action="{{route('user_booking.update',$booking->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div>
                                        <b>Tour Package Name</b>
                                    </div>
                                    <p>{{$booking->packages->title}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-5 col-xs-12">
                                    <div><b>Route Information</b></div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <p><b>From :</b> {{$booking->routes->from_city}}</p>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <p><b>To :</b> {{$booking->routes->to_city}}</p>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <p><b>By :</b> {{$booking->routes->type}}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <b>Hotel Name : </b>
                                    <a href="{{$booking->hotels->link}}" target="_blank">{{$booking->hotels->name}}</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div>
                                            <b>Choose Departure Date</b>
                                        </div>
                                        <input type="date" class="zt-control" value="{{$booking->departure_date}}" name="departure_date" required>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>Tour Cost</th>
                                                <th>+</th>
                                                <th>Transportation Cost</th>
                                                <th>+</th>
                                                <th>Hotel Cost</th>
                                                <th>=</th>
                                                <th>Total Tour Price For 1 Person</th>
                                            </tr>
                                            <tr>
                                                <td>{{$booking->packages->price}}</td>
                                                <th>+</th>
                                                <td>{{$booking->routes->price}}</td>
                                                <th>+</th>
                                                <td>{{$hotel_cost}}</td>
                                                <th>=</th>
                                                <td><span id="estimate_total">{{$estimate_total}}</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <b>Number of People</b>
                                            <input type="number" min="1" id="people_qty" value="{{$booking->qty}}" class="zt-control" name="qty">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <b>Estimate Total Cost : </b> <span id="total_price">0</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <b>Message of Admin</b>
                                            <textarea name="user_msg" rows="10">{{$booking->user_msg}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="zt-flex zt-flex-center">
                                        <input type="hidden" name="estimate_total" value="{{$estimate_total}}">
                                        <button type="submit" class="btn zt-primary btn-lg btn-full">Update Booking</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(function(){
            var est = $('#estimate_total');
            var p_qty = $('#people_qty')
            var total_price = $('#total_price')

            total_price.text(parseInt(est.html()) * parseInt(p_qty.val()))

            p_qty.on('change',function(){
                total_price.text(parseInt(est.html()) * parseInt($(this).val()))
            })

            p_qty.on('keyup',function(){
                total_price.text(parseInt(est.html()) * parseInt($(this).val()))
            })

        })
    </script>
@endsection