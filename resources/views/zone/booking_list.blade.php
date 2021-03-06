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
                            <h3 class="title">All Booking List</h3>
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
                            @foreach($bookings as $b)
                            <tr>
                                <td>{{$b->packages->title}}</td>
                                <td>{{$b->hotels->name}}</td>
                                <td>{{$b->departure_date}}</td>
                                <td>{{$b->qty}}</td>
                                <td>{{$b->total_price}}</td>
                                <td>{{$b->confirm_price}}</td>
                                <td>{{$b->status}}</td>
                                <td>
                                    @if($b->status == 'pending')
                                        <a href="{{route('user_booking.show',$b->id)}}" class="badge badge-info">Detail</a>
                                        <a href="{{route('user_booking.edit',$b->id)}}" class="badge badge-success">Update</a>
                                        <form action="{{route('manage_booking.destroy',$b->id)}}" class="d-inline" method="post" >
                                            {{csrf_field()}}
                                            {{method_field('Delete')}}
                                            <button class="badge badge-danger" type="submit">Cancel</button>
                                        </form>
                                    @elseif($b->status == 'confirm')
                                        <a href="{{route('user_booking.show',$b->id)}}" class="badge badge-info">Detail</a>
                                    @elseif($b->status == 'acknowledge')
                                        <a href="{{route('user_booking.show',$b->id)}}" class="badge badge-info">Detail</a>
                                        <a href="{{route('user_booking.edit',$b->id)}}" class="badge badge-success">Update</a>

                                        {{--For payment--}}
                                        <form action="http://localhost/bank/public/api/transfer" method="post">
                                            <input type="hidden" name="sender_id" value="{{$b->users->bank_id}}">
                                            <input type="hidden" name="receiver_id" value="1">
                                            <input type="hidden" name="amount" value="{{$b->confirm_price}}">
                                            <?php
                                            $uid  = $b->users->id;
                                            $id = $b->id;
                                            $link = "http://localhost:8000/user_booking/success/$id/$uid";
                                            ?>
                                            <input type="hidden" name="redirect_link" value="<?php echo $link; ?>">
                                            <button type="submit" class="badge badge-purple">Payment</button>
                                        </form>

                                        <form action="{{route('manage_booking.destroy',$b->id)}}" class="d-inline" method="post" >
                                            {{csrf_field()}}
                                            {{method_field('Delete')}}
                                            <button class="badge badge-danger" type="submit">Cancel</button>
                                        </form>
                                    @endif

                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection