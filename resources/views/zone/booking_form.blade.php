@extends('zone.layout.app')
@section('title','Zone | Booking List')
@section('content')
    <section class="inner-banner">
        <div class="zt-container">
            <div class="box clearfix">
                <h2>Tour Booking</h2>
            </div>
        </div>
    </section>
    <div class="zt-container">
        <div class="row">
            <div class="col-md-12 col-sm-5 col-xs-12" >
                <div class="destination-sidebar-wrap sidebar-box">
                    <div class="sidebar-header">
                        <h3 class="title">Booking Form</h3>
                    </div>
                    <div class="sidebar-book sidebar-content">
                        @include('zone.layout.error')
                        <form class="form filter-box" enctype="multipart/form-data" action="{{route('user_booking.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div>
                                        <b>Tour Package Name</b>
                                    </div>
                                    <p>{{$package->title}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-5 col-xs-12">
                                    <div><b>Route Information</b></div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <p><b>From :</b> {{$route->from_city}}</p>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <p><b>To :</b> {{$route->to_city}}</p>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <p><b>By :</b> {{$route->type}}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <b>Hotel Name : </b>
                                     <a href="{{$hotel->link}}" target="_blank">{{$hotel->name}}</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div>
                                            <b>Choose Departure Date</b>
                                        </div>
                                        <input type="date" class="zt-control" name="departure_date" required>
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
                                                <td>{{$package->price}}</td>
                                                <th>+</th>
                                                <td>{{$route->price}}</td>
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
                                            <input type="number" min="1" id="people_qty" value="1" class="zt-control" name="qty">
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
                                            <textarea name="user_msg" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="zt-flex zt-flex-center">
                                        <input type="hidden" name="package_id" value="{{$package->id}}">
                                        <input type="hidden" name="route_id" value="{{$route->id}}">
                                        <input type="hidden" name="hotel_id" value="{{$hotel->id}}">
                                        <input type="hidden" name="estimate_total" value="{{$estimate_total}}">
                                        <button type="submit" class="btn zt-primary btn-lg btn-full">Make Booking</button>
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