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
                                <p>Myint Myat Kaung</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>User Email</b>
                            </div>
                            <div class="col-xl-10">
                                <p>myintmyatkaung@gmail.com</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Package Name</b>
                            </div>
                            <div class="col-xl-10">
                                <p>Shwe Inle</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Duration</b>
                            </div>
                            <div class="col-xl-10">
                                <p>3 day(s)</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Route</b>
                            </div>
                            <div class="col-xl-10">
                                <p>Yangon <em class="fa fa-arrow-right"></em> Taung Gyi </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Type</b>
                            </div>
                            <div class="col-xl-10">
                                <p>Car</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Hotel</b>
                            </div>
                            <div class="col-xl-10">
                                <p>Hotel Max (Inle)</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Estimate Price</b>
                            </div>
                            <div class="col-xl-10">
                                3000 Kyat(s)
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>User Massage</b>
                            </div>
                            <div class="col-xl-10">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusamus blanditiis dicta eos exercitationem fuga inventore iusto,
                                modi nisi obcaecati porro quia repellendus sapiente similique sit unde,
                                velit vitae voluptas voluptatibus.
                            </div>
                        </div>
                        <hr>
                        <form class="form-horizontal" method="post" action="{{route('manage_booking.update','1')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="row">
                                <div class="col-xl-2">
                                    <b>Confirm Price</b>
                                </div>
                                <div class="col-xl-10">
                                    <input type="number" min="1" value="3200">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-xl-2">
                                    <b>Message to Customer</b>
                                </div>
                                <div class="col-xl-10">
                                    <textarea name="admin_msg" id="" rows="10" class="form-control"></textarea>
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