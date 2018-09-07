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
                Create New Tour Package
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <a href="{{route('manage_package.index')}}" class="btn btn-labeled btn-outline-info">
                           <span class="btn-label"><i class="fa fa-arrow-left"></i>
                           </span>Back
                </a>
                <div class="card card">
                    <div class="card-header">
                        Enter Tour Package Information
                    </div>
                    @include('dashboard.layout.error')
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{route('manage_package.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Package Title</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="title" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Destination</label>
                                <div class="col-xl-6 col-10">
                                    <select name="city_id" id="select2-2" class="form-control">
                                        @foreach($cities as $c)
                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Price</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="number" name="price" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Package Type</label>
                                <div class="col-xl-6 col-10">
                                    <select name="type" id="select2-1" class="form-control">
                                        <option value="normal">Normal Trip</option>
                                        <option value="honeymoon">Honeymoon Trip</option>
                                        <option value="vacation">Vacation Trip</option>
                                        <option value="sightseeing">Sightseeing Trip</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Description</label>
                                <div class="col-md-10">
                                    <textarea name="description" class="textareaeditor"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Itinerary</label>
                                <div class="col-md-10">
                                    <textarea name="itinerary" class="textareaeditor"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Geo Location</label>
                                <div class="col-xl-10">
                                    <textarea name="geo_location" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Duration</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="number" name="duration" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Images (Max 3 images)</label>
                                <div class="col-xl-10">
                                    <input class="form-control filestyle" type="file" name="images[]" data-classbutton="btn btn-secondary" data-classinput="form-control inline" data-icon="&lt;span class='fa fa-upload mr'&gt;&lt;/span&gt;" multiple required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-10">
                                    <button class="btn btn-sm btn-green" type="submit">Create</button>
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
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
    tinymce.init({
    selector: '.textareaeditor',
    height: 500,
    theme: 'modern',
    plugins: ' lists textcolor  colorpicker textpattern',
    toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
    image_advtab: true,
    templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
    ]
    });
    </script>
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