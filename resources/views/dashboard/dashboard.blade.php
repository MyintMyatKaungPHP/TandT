@extends('dashboard.layout.app')
@section('css')
    <!-- WEATHER ICONS-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/weather-icons/css/weather-icons.css')}}">
    <!-- MORRIS-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/morris.js.so/morris.css')}}">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/css/bootstrap.css')}}" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/css/app.css')}}" id="maincss">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/animate.css/animate.css')}}">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/whirl/dist/whirl.css')}}">
    <script src="{{asset('dashboard_asset/ga.js')}}"></script>
@endsection
@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Dashboard
            </div>
        </div>
        @include('dashboard.layout.error')
        <div class="row">
            <div class="col-xl-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <!-- START date widget-->
                            <div class="card flex-row align-items-center align-items-stretch border-0">
                                <div class="col-4 d-flex align-items-center bg-green justify-content-center rounded-left">
                                    <div class="text-center">
                                        <!-- See formats: https://docs.angularjs.org/api/ng/filter/date-->
                                        <div class="text-sm" data-now="" data-format="MMMM"></div>
                                        <br>
                                        <div class="h2 mt-0" data-now="" data-format="D"></div>
                                    </div>
                                </div>
                                <div class="col-8 py-3 rounded-right">
                                    <div class="text-uppercase" data-now="" data-format="dddd"></div>
                                    <br>
                                    <div class="h2 mt-0" data-now="" data-format="h:mm"></div>
                                    <div class="text-muted text-sm" data-now="" data-format="a"></div>
                                </div>
                            </div>
                            <!-- END date widget-->
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <!-- START card-->
                            <div class="card flex-row align-items-center align-items-stretch border-0">
                                <div class="col-4 d-flex align-items-center bg-primary-dark justify-content-center rounded-left">
                                    <em class="fa fa-users fa-3x"></em>
                                </div>
                                <div class="col-8 py-3 bg-primary rounded-right">
                                    <div class="h2 mt-0">1700</div>
                                    <div class="text-uppercase">Total Users</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <!-- START card-->
                            <div class="card flex-row align-items-center align-items-stretch border-0">
                                <div class="col-4 d-flex align-items-center bg-purple-dark justify-content-center rounded-left">
                                    <em class="fa fa-gift fa-3x"></em>
                                </div>
                                <div class="col-8 py-3 bg-purple rounded-right">
                                    <div class="h2 mt-0">700</div>
                                    <div class="text-uppercase">Total Tour Packages</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <!-- START card-->
                            <div class="card flex-row align-items-center align-items-stretch border-0">
                                <div class="col-4 d-flex align-items-center bg-green-dark justify-content-center rounded-left">
                                    <em class="fa fa-book fa-3x"></em>
                                </div>
                                <div class="col-8 py-3 bg-green rounded-right">
                                    <div class="h2 mt-0">500</div>
                                    <div class="text-uppercase">Total Booking</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- monthly and yearly START -->
                    <h4 class="page-header">Incomes </h4>
                    <div class="row">
                        {{--monthly chart--}}
                        <div class="col-xl-6">
                            <div class="card card-default" id="cardChart2">
                                <div class="card-header">
                                    <div class="card-title">Monthly Incomes</div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar flot-chart"></div>
                                </div>
                            </div>
                        </div>
                        {{--yearly chart--}}
                        <div class="col-lg-6">
                            <div class="card card-default">
                                <div class="card-header">Yearly Incomes and Customers</div>
                                <div class="card-body">
                                    <div id="morris-line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- monthly and yearly END -->


                    {{--top--}}
                    <h4 class="page-header">Top </h4>
                    <div class="row">
                        {{--top users--}}
                        <div class="col-lg-6">
                            <div class="card card-default">
                                <div class="card-header">Top Customers</div>
                                <div class="card-body text-center">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="radial-bar radial-bar-20 radial-bar radial-bar-danger">
                                                <img src="{{asset('dashboard_asset/img/user/03.jpg')}}" alt="Image">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="radial-bar radial-bar-35 radial-bar-warning" data-label="35%">
                                                <img src="{{asset('dashboard_asset/img/user/01.jpg')}}" alt="Image">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="radial-bar radial-bar-50 radial-bar-info" data-label="50%">
                                                <img src="{{asset('dashboard_asset/img/user/04.jpg')}}" alt="Image">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="radial-bar radial-bar-100 radial-bar-success" data-label="100%">
                                                <img src="{{asset('dashboard_asset/img/user/05.jpg')}}" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- top tour packages --}}
                        <div class="col-lg-6">
                            <div class="card card-default" id="cardChart5">
                                <div class="card-header">
                                    <div class="card-title">Top Tour Packages</div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-pie flot-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- SLIMSCROLL-->
    <script src="{{asset('dashboard_asset/vendor/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- SPARKLINE-->
    <script src="{{asset('dashboard_asset/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
    <!-- FLOT CHART-->
    <script src="{{asset('dashboard_asset/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/jquery.flot.spline/jquery.flot.spline.js')}}"></script>
    <!-- EASY PIE CHART-->
    <script src="{{asset('dashboard_asset/vendor/easy-pie-chart/dist/jquery.easypiechart.js')}}"></script>
    <!-- MOMENT JS-->
    <script src="{{asset('dashboard_asset/vendor/moment/min/moment-with-locales.js')}}"></script>
    <!-- RAPHAEL-->
    <script src="{{asset('dashboard_asset/vendor/raphael/raphael.js')}}"></script>
    <!-- MORRIS-->
    <script src="{{asset('dashboard_asset/vendor/morris.js.so/morris.js')}}"></script>
    <!-- JQUERY KNOB-->
    <script src="{{asset('dashboard_asset/vendor/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    <!-- EASY PIE CHART-->
    <script src="{{asset('dashboard_asset/vendor/easy-pie-chart/dist/jquery.easypiechart.js')}}"></script>

@endsection