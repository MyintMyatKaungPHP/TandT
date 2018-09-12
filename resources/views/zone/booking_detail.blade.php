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
                        @include('zone.layout.error')
                        <table class="table table-striped">
                            <tr>
                                <th>Tour Package</th>
                                <td>Shwe Inle</td>
                            </tr>
                            <tr>
                                <th>Route Information</th>
                                <td>Yangon -> Taung Gyi</td>
                            </tr>
                            <tr>
                                <th>Transport Type</th>
                                <td>Car</td>
                            </tr>
                            <tr>
                                <th>Hotel Name</th>
                                <td>Hotel Max (Inle)</td>
                            </tr>
                            <tr>
                                <th>Departure Date</th>
                                <td>13-sept-2018</td>
                            </tr>
                            <tr>
                                <th>Number of people</th>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th>Estimate Price</th>
                                <td>3000</td>
                            </tr>
                            <tr>
                                <th>Confirm Price</th>
                                <td>3200</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>Confirm</td>
                            </tr>
                            <tr>
                                <th>Admin Message</th>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur assumenda
                                    debitis distinctio dolor esse hic nemo nihil numquam quisquam saepe, sit totam ut veniam vero
                                    voluptatibus. Necessitatibus, quis.
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection