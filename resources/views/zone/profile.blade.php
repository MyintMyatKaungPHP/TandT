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
            <div class="col-md-12 col-sm-5 col-xs-12" >
                <div class="destination-sidebar-wrap sidebar-box">
                    <div class="sidebar-header" align="center">
                        <img src="{{asset('images/clients/'.Auth::user()->image)}}" width="150px" alt="">
                        <h3 class="title">{{Auth::user()->name}}</h3>
                    </div>
                    <div class="sidebar-book sidebar-content">
                        @include('zone.layout.error')
                        <form class="form filter-box" enctype="multipart/form-data" action="{{route('registration.update',Auth::id())}}" method="post">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="row">
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <input type="text" class="zt-control" placeholder="Name" value="{{Auth::user()->name}}" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <input type="email" class="zt-control" placeholder="Email" value="{{Auth::user()->email}}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <input type="text" class="zt-control" placeholder="Bank ID" value="{{Auth::user()->bank_id}}" name="bank_id">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <input type="password" class="zt-control" placeholder="Current Password" name="cur_password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <input type="password" class="zt-control" placeholder="New Password" name="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <input type="password" class="zt-control" placeholder="Confirm Password"  name="password_confirmation">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-5 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <textarea class="zt-control" placeholder="Address" name="address">{{Auth::user()->address}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-5 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <input type="text" class="zt-control" maxlength="11" placeholder="Phone" value="{{Auth::user()->phone}}" name="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-5 col-xs-12">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <input type="file" class="zt-control" name="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="zt-flex zt-flex-center">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <button type="submit" class="btn zt-primary btn-lg btn-full">Update</button>
                                        </div>
                        </form>
                                        @if(Auth::user()->role=='user'||Auth::user()->role=='editor')
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <form action="{{route('registration.destroy',Auth::id())}}" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('Delete')}}
                                                    <button type="submit" class="btn zt-primary btn-lg btn-full">Delete</button>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection