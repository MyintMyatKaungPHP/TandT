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
                                    <div class="h2 mt-0">{{$usercount}}</div>
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
                                    <div class="h2 mt-0">{{$packagecount}}</div>
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
                                    <div class="h2 mt-0">{{$bookingcount}}</div>
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

    <script>
        // CHART BAR
        // -----------------------------------
        (function(window, document, $, undefined) {

            $(function() {

                var data = [{
                    "label": "Sales",
                    "color": "#9cd159",
                    "data": [
                        ["Jan",
                            <?php
                                foreach($monthly_price as $m){
                                    if($m->months =='January'){
                                        echo $m->total_price;
                                    }else{
                                        echo 0;
                                    }
                                }
                            ?>
                        ],
                        ["Feb",
                            <?php
                            foreach($monthly_price as $m){
                                if($m->months =='February'){
                                    echo $m->total_price;
                                }else{
                                    echo 0;
                                }
                            }
                            ?>
                        ],
                        ["Mar",
                            <?php
                            foreach($monthly_price as $m){
                                if($m->months =='March'){
                                    echo $m->total_price;
                                }else{
                                    echo 0;
                                }
                            }
                            ?>
                        ],
                        ["Apr",
                            <?php
                            foreach($monthly_price as $m){
                                if($m->months =='April'){
                                    echo $m->total_price;
                                }else{
                                    echo 0;
                                }
                            }
                            ?>
                        ],
                        ["May",
                            <?php
                            foreach($monthly_price as $m){
                                if($m->months =='May'){
                                    echo $m->total_price;
                                }else{
                                    echo 0;
                                }
                            }
                            ?>
                        ],
                        ["Jun",
                            <?php
                            foreach($monthly_price as $m){
                                if($m->months =='June'){
                                    echo $m->total_price;
                                }else{
                                    echo 0;
                                }
                            }
                            ?>
                        ],
                        ["Jul",
                            <?php
                            foreach($monthly_price as $m){
                                if($m->months =='July'){
                                    echo $m->total_price;
                                }else{
                                    echo 0;
                                }
                            }
                            ?>
                        ],
                        ["Aug",
                            <?php
                            foreach($monthly_price as $m){
                                if($m->months =='August'){
                                    echo $m->total_price;
                                }else{
                                    echo 0;
                                }
                            }
                            ?>
                        ],
                        ["Sep",
                            <?php
                            foreach($monthly_price as $m){
                                if($m->months =='September'){
                                    echo $m->total_price;
                                }else{
                                    echo 0;
                                }
                            }
                            ?>
                        ],
                        ["Oct",
                            <?php
                            foreach($monthly_price as $m){
                                if($m->months =='October'){
                                    echo $m->total_price;
                                }else{
                                    echo 0;
                                }
                            }
                            ?>
                        ],
                        ["Nov",
                            <?php
                            foreach($monthly_price as $m){
                                if($m->months =='November'){
                                    echo $m->total_price;
                                }else{
                                    echo 0;
                                }
                            }
                            ?>
                        ],
                        ["DEC",
                            <?php
                            foreach($monthly_price as $m){
                                if($m->months =='December'){
                                    echo $m->total_price;
                                }else{
                                    echo 0;
                                }
                            }
                            ?>
                        ]
                    ]
                }];

                var options = {
                    series: {
                        bars: {
                            align: 'center',
                            lineWidth: 0,
                            show: true,
                            barWidth: 0.6,
                            fill: 0.9
                        }
                    },
                    grid: {
                        borderColor: '#eee',
                        borderWidth: 1,
                        hoverable: true,
                        backgroundColor: '#fcfcfc'
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: function(label, x, y) { return x + ' : ' + y; }
                    },
                    xaxis: {
                        tickColor: '#fcfcfc',
                        mode: 'categories'
                    },
                    yaxis: {
                        // position: 'right' or 'left'
                        tickColor: '#eee'
                    },
                    shadowSize: 0
                };

                var chart = $('.chart-bar');
                if (chart.length)
                    $.plot(chart, data, options);

            });

        })(window, document, window.jQuery);



///////////////////////////////////////////////////////////

        (function(window, document, $, undefined) {

            $(function() {

                if (typeof Morris === 'undefined') return;

                var chartdata = [
                    <?php
                        foreach($yearly_price as $y){
                            $year = $y->year;
                            $total_price = $y->total_price;
                            foreach($yearly_users as $u){
                               if($u->year == $year){
                                   $total_users = $u->total_users;
                               }else{

                               }
                            }
                            echo "{y:'$year',a:$total_price,b:$total_users},";
                        }
                        ?>

                ];

                var donutdata = [
                    { label: "Download Sales", value: 12 },
                    { label: "In-Store Sales", value: 30 },
                    { label: "Mail-Order Sales", value: 20 }
                ];

                // Line Chart
                // -----------------------------------

                new Morris.Line({
                    element: 'morris-line',
                    data: chartdata,
                    xkey: 'y',
                    ykeys: ["a", "b"],
                    labels: ["Total Income", "Total Users"],
                    lineColors: ["#31C0BE", "#7a92a3"],
                    resize: true
                });

                // Donut Chart
                // -----------------------------------
                new Morris.Donut({
                    element: 'morris-donut',
                    data: donutdata,
                    colors: ['#f05050', '#fad732', '#ff902b'],
                    resize: true
                });

                // Bar Chart
                // -----------------------------------
                new Morris.Bar({
                    element: 'morris-bar',
                    data: chartdata,
                    xkey: 'y',
                    ykeys: ["a", "b"],
                    labels: ["Series A", "Series B"],
                    xLabelMargin: 2,
                    barColors: ['#23b7e5', '#f05050'],
                    resize: true
                });

                // Area Chart
                // -----------------------------------
                new Morris.Area({
                    element: 'morris-area',
                    data: chartdata,
                    xkey: 'y',
                    ykeys: ["a", "b"],
                    labels: ["Serie A", "Serie B"],
                    lineColors: ['#7266ba', '#23b7e5'],
                    resize: true
                });

            });

        })(window, document, window.jQuery);


    //    For Pie Chart
        (function(window, document, $, undefined) {

            $(function() {

                var data = [{
                    "color": "#4acab4",
                    <?php
                        if(isset($top_package[0])){
                            $total = $top_package[0]->total;
                            $title = $top_package[0]->packages->title;
                            echo "data:$total,'label': \" $title \"";
                        }else{
                            $total = 0;
                            $title= 'nothing';
                            echo "data:$total,'label': \" $title \"";
                        }

                    ?>
                }, {
                    "label": "CSS",
                    <?php
                    if(isset($top_package[1])){
                        $total = $top_package[1]->total;
                        $title = $top_package[1]->packages->title;
                        echo "data:$total,'label': \" $title \"";
                    }else{
                        $total = 0;
                        $title= 'nothing';
                        echo "data:$total,'label': \" $title \"";
                    }

                    ?>
                }, {
                    "label": "LESS",
                    <?php
                    if(isset($top_package[2])){
                        $total = $top_package[2]->total;
                        $title = $top_package[2]->packages->title;
                        echo "data:$total,'label': \" $title \"";
                    }else{
                        $total = 0;
                        $title= 'nothing';
                        echo "data:$total,'label': \" $title \"";
                    }

                    ?>
                }, {
                    "label": "SASS",
                    <?php
                    if(isset($top_package[3])){
                        $total = $top_package[3]->total;
                        $title = $top_package[3]->packages->title;
                        echo "data:$total,'label': \" $title \"";
                    }else{
                        $total = 0;
                        $title= 'nothing';
                        echo "data:$total,'label': \" $title \"";
                    }

                    ?>
                }, {
                    "label": "Jade",
                    <?php
                    if(isset($top_package[4])){
                        $total = $top_package[4]->total;
                        $title = $top_package[4]->packages->title;
                        echo "data:$total,'label': \" $title \"";
                    }else{
                        $total = 0;
                        $title= 'nothing';
                        echo "data:$total,'label': \" $title \"";
                    }

                    ?>
                }];

                var options = {
                    series: {
                        pie: {
                            show: true,
                            innerRadius: 0,
                            label: {
                                show: true,
                                radius: 0.8,
                                formatter: function(label, series) {
                                    return '<div class="flot-pie-label">' +
                                        //label + ' : ' +
                                        Math.round(series.percent) +
                                        '%</div>';
                                },
                                background: {
                                    opacity: 0.8,
                                    color: '#222'
                                }
                            }
                        }
                    }
                };

                var chart = $('.chart-pie');
                if (chart.length)
                    $.plot(chart, data, options);

            });

        })(window, document, window.jQuery);

    </script>



@endsection