@extends('dashboard.layout.app')
@section('css')
    <!-- TAGS INPUT-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
    <!-- SLIDER CTRL-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/bootstrap-slider/dist/css/bootstrap-slider.css')}}">
    <!-- CHOSEN-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/chosen-js/chosen.css')}}">
    <!-- DATETIMEPICKER-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.css')}}">
    <!-- COLORPICKER-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css')}}">
    <!-- SELECT2-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/select2/dist/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/%40ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.css')}}">
    <!-- WYSIWYG-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/bootstrap-wysiwyg/css/style.css')}}">
@endsection
@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Update Hotel
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <a href="{{ route('manage_hotel.index') }}" class="btn btn-labeled btn-outline-info">
                           <span class="btn-label"><i class="fa fa-arrow-left"></i>
                           </span>Back
                </a>
                <div class="card card">
                    <div class="card-header">
                        Enter Hotel Information
                    </div>
                    @include('dashboard.layout.error')
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{route('manage_hotel.update',$hotel->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Name</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="name" value="{{$hotel->name}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Place</label>
                                <div class="col-xl-6 col-10">
                                    <select name="place" id="select2-2" class="form-control">
                                        @foreach($cities as $c)
                                            <option
                                                    @if($c->name == $hotel->place)
                                                        selected
                                                    @endif
                                                    value="{{$c->name}}">{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Price</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="number" value="{{$hotel->price}}" name="price" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Website Address</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="link" value="{{$hotel->link}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-10">
                                    <button class="btn btn-sm btn-green" type="submit">Update</button>
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
@section('script')
    <!-- FILESTYLE-->
    <script src="{{asset('dashboard_asset/vendor/bootstrap-filestyle/src/bootstrap-filestyle.js')}}"></script>
    <!-- TAGS INPUT-->
    <script src="{{asset('dashboard_asset/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}}"></script>
    <!-- CHOSEN-->
    <script src="{{asset('dashboard_asset/vendor/chosen-js/chosen.jquery.js')}}"></script>
    <!-- SLIDER CTRL-->
    <script src="{{asset('dashboard_asset/vendor/bootstrap-slider/dist/bootstrap-slider.js')}}"></script>
    <!-- INPUT MASK-->
    <script src="{{asset('dashboard_asset/vendor/inputmask/dist/jquery.inputmask.bundle.js')}}"></script>
    <!-- WYSIWYG-->
    <script src="{{asset('dashboard_asset/vendor/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <!-- MOMENT JS-->
    <script src="{{asset('dashboard_asset/vendor/moment/min/moment-with-locales.js')}}"></script>
    <!-- DATETIMEPICKER-->
    <script src="{{asset('dashboard_asset/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js')}}"></script>
    <!-- COLORPICKER-->
    <script src="{{asset('dashboard_asset/vendor/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js')}}"></script>
    <!-- SELECT2-->
    <script src="{{asset('dashboard_asset/vendor/select2/dist/js/select2.full.js')}}"></script>
@endsection