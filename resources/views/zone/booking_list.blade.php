@extends('zone.layout.app')
@section('title','Zone | Booking List')
@section('content')
    <section class="inner-banner">
        <div class="zt-container">
            <div class="box clearfix">
                <h2>Booking List</h2>
            </div>
        </div>
    </section>
    <div class="zt-container">
        <div class="row">
            <div class="col-md-12 col-sm-5 col-xs-12" >
                <div class="destination-sidebar-wrap sidebar-box">
                    <div class="sidebar-book sidebar-content">
                        <div class="sidebar-header">
                            <h3 class="title">All Booking List of Myint Myat Kaung</h3>
                        </div>
                        @include('zone.layout.error')
                        <table class="table table-striped">
                            <tr>
                                <th>Tour Package</th>
                                <th>Hotel Name</th>
                                <th>Departure Date</th>
                                <th>People</th>
                                <th>Total Estimate Price</th>
                                <th>Confirm Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>Shwe Inle</td>
                                <td>Hotel Max (Inle)</td>
                                <td>3-sept-2018</td>
                                <td>3</td>
                                <td>3000</td>
                                <td>3200</td>
                                <td>pending</td>
                                <td>
                                    <a href="{{route('user_booking.show','1')}}" class="badge badge-info">Detail</a>
                                    <a href="" class="badge badge-success">Update</a>
                                    <form action="" class="d-inline" method="post" >
                                        {{csrf_field()}}
                                        {{method_field('Delete')}}
                                        <button class="badge badge-danger" type="submit">Cancel</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Shwe Inle</td>
                                <td>Hotel Max (Inle)</td>
                                <td>3-sept-2018</td>
                                <td>3</td>
                                <td>3000</td>
                                <td>3200</td>
                                <td>acknowledge</td>
                                <td>
                                    <a href="" class="badge badge-info">Detail</a>
                                    <a href="" class="badge badge-success">Update</a>
                                    <a href="" class="badge badge-purple">Payment</a>
                                    <form action="" class="d-inline" method="post" >
                                        {{csrf_field()}}
                                        {{method_field('Delete')}}
                                        <button class="badge badge-danger" type="submit">Cancel</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Shwe Inle</td>
                                <td>Hotel Max (Inle)</td>
                                <td>3-sept-2018</td>
                                <td>3</td>
                                <td>3000</td>
                                <td>3200</td>
                                <td>confirm</td>
                                <td>
                                    <a href="" class="badge badge-info">Detail</a>
                                    <form action="" class="d-inline" method="post" >
                                        {{csrf_field()}}
                                        {{method_field('Delete')}}
                                        <button class="badge badge-danger" type="submit">Cancel</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection