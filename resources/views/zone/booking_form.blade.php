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
                                    <p>Shwe Inle</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-5 col-xs-12">
                                    <div><b>Route Information</b></div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <p><b>From :</b> Yangon</p>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <p><b>To :</b> Taung Gyi</p>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <p><b>By :</b> Car</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <b>Hotel Name : </b>
                                     <a href="">Shwe Inle</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div>
                                            <b>Choose Departure Date</b>
                                        </div>
                                        <input type="date" class="zt-control" name="departure_date">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>Tour Cost</th><th>Transportation Cost</th><th>Hotel Cost</th><th>Total Estimate Price</th>
                                            </tr>
                                            <tr>
                                                <td>1000</td>
                                                <td>1000</td>
                                                <td>1000</td>
                                                <td>3000</td>
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
                                            <input type="number" min="1" value="1" class="zt-control" name="qty">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <b>Estimate Total Cost : </b> 3000
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

@endsection