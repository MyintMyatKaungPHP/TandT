@extends('zone.layout.app')
@section('title','Zone | Profile')
@section('content')
    <section class="inner-banner">
        <div class="zt-container">
            <div class="box clearfix">
                <h2>Profile</h2>
            </div>
        </div>
    </section>
    <div class="zt-container">
        <div class="row">
            <div class="col-md-4 col-sm-5 col-xs-12"></div>
            <div class="col-md-4 col-sm-5 col-xs-12" >
                <div class="destination-sidebar-wrap sidebar-box">
                    <div class="sidebar-header" align="center">
                        <img src="{{asset('images/clients/'.$user->image)}}" width="150px" alt="">
                        <h3 class="title">{{$user->name}}</h3>
                    </div>
                    <div class="sidebar-book sidebar-content">
                        @include('zone.layout.error')
                        <form class="form filter-box" enctype="multipart/form-data" action="{{route('registration.update',$user->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="text" class="zt-control" placeholder="Name" value="{{$user->name}}" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="email" class="zt-control" placeholder="Email" value="{{$user->email}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="password" class="zt-control" placeholder="Current Password" name="cur_password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="password" class="zt-control" placeholder="New Password" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="password" class="zt-control" placeholder="Confirm Password"  name="password_confirmation">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="text" class="zt-control" maxlength="11" placeholder="Phone" value="{{$user->phone}}" name="phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <textarea class="zt-control" placeholder="Address" name="address">{{$user->address}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="file" class="zt-control" name="image">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="zt-flex zt-flex-center">
                                    <button type="submit" class="btn zt-primary btn-lg btn-full">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection