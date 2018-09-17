<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>@yield('title')</title>
    <style>
        .logout:hover{
            background-color:black!important;
            border:2px solid #f4b843;
            color:white;
            transition:0.2s!important;
        }

        .profile img{
            width:40px;
            height:40px;
            border-radius:3px;
        }
    </style>
    <!-- viewport meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- styles -->
    <link rel="stylesheet" href="{{asset('zone_asset/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{asset('zone_asset/plugins/font-awesome/css/font-awesome.min.css')}}">
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{asset('zone_asset/plugins/flaticon/flaticon.css')}}">
    <!-- revolution slider css -->
    <link rel="stylesheet" href="{{asset('zone_asset/plugins/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('zone_asset/plugins/revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('zone_asset/plugins/revolution/css/navigation.css')}}">
    <!-- jQuery ui css -->
    <link href="{{asset('zone_asset/plugins/jquery-ui-1.12.1/jquery-ui.css')}}" rel="stylesheet">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{asset('zone_asset/plugins/owl.carousel-2/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('zone_asset/plugins/owl.carousel-2/assets/owl.theme.default.min.css')}}">
    <!-- gallery -->
    <link rel="stylesheet" href="{{asset('zone_asset/plugins/lightGallery/dist/css/lightgallery.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('zone_asset/plugins/animate.min.css')}}">
    <!-- bxslider -->
    <link rel="stylesheet" href="{{asset('zone_asset/plugins/bx-slider/jquery.bxslider.css')}}">
    <!-- datetimepicker css -->
    <link rel="stylesheet" href="{{asset('zone_asset/plugins/datetimepicker/jquery.datetimepicker.min.css')}}">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{asset('zone_asset/css/style.css')}}">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('zone_asset/css/responsive.css')}}">
    <!-- skin stylesheet -->
    <link rel="stylesheet" href="{{asset('zone_asset/css/skin/skin-default.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
</head>
<body>
<div id="top-bar" class="hidden-sm hidden-xs home">
    <div class="zt-container">
        <div class="social-top pull-left">
            <ul>
                <li><a href="#" target="_blank"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#" target="_blank"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#" target="_blank"><span class="fa fa-instagram"></span></a></li>
                <li><a href="#" target="_blank"><span class="fa fa-google-plus"></span></a></li>
            </ul>
        </div>

        <div class="login pull-right">
            <ul>
                @if(!Auth::check())
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('registration.index')}}">Register</a></li>
                @else
                    <li class="profile">
                        <img src="{{asset('images/clients/'.Auth::user()->image)}}" alt="">
                    </li>
                    <li><a href="#"><b>{{Auth::user()->name}}</b></a></li>
                    <li><a href="{{route('user.profile')}}" class="text text-warning">Edit Profile</a></li>
                    <li><a href="{{route('goBookingList',Auth::id())}}" class="text text-warning">View Booking List</a></li>
                    @if(Auth::user()->role=="admin"||Auth::user()->role=='editor')
                        <li><a href="{{route('dashboard')}}" class="text text-warning">Dashboard</a></li>
                    @endif
                    <li><a href="{{route('user.logout')}}" class="btn zt-primary logout" style="margin-left:10px;line-height:3px;height:3px;font-size:10px!important;">Logout</a></li>
                @endif
            </ul>
        </div>



        <div class="form-search-wrap">
            <div class="zt-container">
                <a href="#" class="close-search"><span class="fa fa-remove"></span></a>
                <div class="form-search-box zt-flex zt-flex-center zt-flex-middle">
                    <form class="form" action="#">
                        <div class="form-group">
                            <div class="input-icon">
                                <input type="text" class="zt-control"  placeholder="Search...">
                                <div class="input-addon"><span class="fa fa-search"></span></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('zone.layout.menu')
@yield('content')
<footer id="footer" class="sec-padding">
    <div class="zt-container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-widget notitle about-widget">
                    <div class="title">
                        <h3>ABOUT US</h3>
                    </div>
                    <img class="logo-footer" src="{{asset('images/logo.png')}}" alt="" />
                    <p>Zone Travels and Tours Company Limited was established in Myanmar in 2001. We provide inbound services and that are 100 percent locally owned and are licensed with the Ministry of Hotels and Tourism (number Kha-1328). Our 70-member team is well aware and equipped to meet the requirements of tourism in Myanmar.</p>
                    <ul class="social-footer">
                        <li><a href="#" target="_blank"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fa fa-instagram"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="footer-widget post-link-widget">
                    <div class="title">
                        <h3>LINKS</h3>
                    </div>
                    <ul>
                        <li><a href="{{route('zone')}}">Home</a></li>
                        <li><a href="{{route('packages')}}">Tour Packages</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="footer-widget post-link-widget">
                    <div class="title">
                        <h3>HOTEL LINKS</h3>
                    </div>
                    <ul>
                        <li><a href="http://www.shangri-la.com/yangon">Sule Shangri-la</a></li>
                        <li><a href="http://www.sedonahotels.com.sg/yangon">Sedona Yangon</a></li>
                        <li><a href="https://www.accorhotels.com/gb/hotel-9045-novotel-yangon-max/index.shtml">Novotel</a></li>
                        <li><a href="http://hotelmandalaymyanmar.com/">Hotel Mandalay</a></li>
                        <li><a href="https://royalstarhotel.business.site/">Royal Star Hotel</a></li>
                        <li><a href="https://www.shwekyunhotel-myanmar.com/en-us">Shwe Kyun Hotel</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom text-white">
    <div class="zt-container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="left-text">
                    @2018 Zone Travels & Tours
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JS -->
<!-- jQuery js -->
<script src="{{asset('zone_asset/plugins/jquery/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('zone_asset/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jQuery ui js -->
<script src="{{asset('zone_asset/plugins/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
<!-- owl carousel js -->
<script src="{{asset('zone_asset/plugins/owl.carousel-2/owl.carousel.min.js')}}"></script>
<!-- gallery js -->
<script src="{{asset('zone_asset/plugins/lightGallery/dist/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('zone_asset/plugins/lightGallery/dist/js/jquery.mousewheel.min.js')}}"></script>
<!-- jQuery validation -->
<script src="{{asset('zone_asset/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<!-- bxslider js -->
<script src="{{asset('zone_asset/plugins/bx-slider/jquery.bxslider.min.js')}}"></script>
<!-- datetimepicker js -->
<script src="{{asset('zone_asset/plugins/datetimepicker/jquery.datetimepicker.full.min.js')}}"></script>
<!-- revolution slider js -->
<script src="{{asset('zone_asset/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('zone_asset/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('zone_asset/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('zone_asset/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('zone_asset/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('zone_asset/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('zone_asset/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('zone_asset/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('zone_asset/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('zone_asset/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('zone_asset/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- theme custom js  -->
<script src="{{asset('zone_asset/js/main.js')}}"></script>
</body>
</html>