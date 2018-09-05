@extends('zone.layout.app')
@section('title','Zone | Registration')
@section('content')
    <section class="inner-banner">
        <div class="zt-container">
            <div class="box clearfix">
                <h2>Registration</h2>
            </div>
        </div>
    </section>
    <div class="zt-container">
        <div class="row">
            <div class="col-md-4 col-sm-5 col-xs-12"></div>
            <div class="col-md-4 col-sm-5 col-xs-12" >
                <div class="destination-sidebar-wrap sidebar-box">
                    <div class="sidebar-header">
                        <h3 class="title">Registration Form</h3>
                    </div>
                    <div class="sidebar-book sidebar-content">
                        @include('zone.layout.error')
                        <form class="form filter-box" enctype="multipart/form-data" action="{{route('registration.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="text" class="zt-control" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="email" class="zt-control" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="password" class="zt-control" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="password" class="zt-control"  name="password_confirmation" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="text" class="zt-control" maxlength="11" placeholder="Phone" name="phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <textarea class="zt-control" placeholder="Address" name="address"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <input type="file" class="zt-control" name="image">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="zt-flex zt-flex-center">
                                    <button type="submit" class="btn zt-primary btn-lg btn-full">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection