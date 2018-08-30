@extends('dashboard.layout.app')
@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Tour Package Information Detail
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <a href="{{route('manage_package.index')}}" class="btn btn-labeled btn-outline-info">
                           <span class="btn-label"><i class="fa fa-arrow-left"></i>
                           </span>Back
                </a>
                <div class="card card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Title</b>
                            </div>
                            <div class="col-xl-10">
                                <p>{{$package->title}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Destination</b>
                            </div>
                            <div class="col-xl-10">
                                <p>{{$package->cities->name}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Duration</b>
                            </div>
                            <div class="col-xl-10">
                                <p>{{$package->duration}} day(s)</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Price</b>
                            </div>
                            <div class="col-xl-10">
                                <p>$ {{$package->price}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Description</b>
                            </div>
                            <div class="col-xl-10">
                                <?php echo $package->description; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Itinerary</b>
                            </div>
                            <div class="col-xl-10">
                                <?php echo $package->itinerary; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Geo Location</b>
                            </div>
                            <div class="col-xl-10">
                                <iframe src="{{$package->geo_location}}" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-2">
                                <b>Images</b>
                            </div>
                            <div class="col-xl-10">
                                <?php
                                $image_arr = explode(',',$package->images);
                                foreach ($image_arr as $i){
                                ?>
                                <img src="{{asset('/images/tour/'.$i)}}" width="400px" height="200px">
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection