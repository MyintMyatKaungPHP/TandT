<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>@yield('title')</title>
    <!-- viewport meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    {{--<!-- Facebook Pixel Code -->--}}
    {{--<script>--}}
    {{--!function (f, b, e, v, n, t, s)--}}
    {{--{--}}
    {{--if (f.fbq)--}}
    {{--return;--}}
    {{--n = f.fbq = function () {--}}
    {{--n.callMethod ?--}}
    {{--n.callMethod.apply(n, arguments) : n.queue.push(arguments)--}}
    {{--};--}}
    {{--if (!f._fbq)--}}
    {{--f._fbq = n;--}}
    {{--n.push = n;--}}
    {{--n.loaded = !0;--}}
    {{--n.version = '2.0';--}}
    {{--n.queue = [];--}}
    {{--t = b.createElement(e);--}}
    {{--t.async = !0;--}}
    {{--t.src = v;--}}
    {{--s = b.getElementsByTagName(e)[0];--}}
    {{--s.parentNode.insertBefore(t, s)--}}
    {{--}(window, document, 'script', '../../connect.facebook.net/en_US/fbevents.js');--}}
    {{--fbq('init', '348669228917290');--}}
    {{--fbq('track', 'PageView');--}}
    {{--</script>--}}
    {{--<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=348669228917290&amp;ev=PageView&amp;noscript=1"/></noscript>--}}
    {{--<!-- End Facebook Pixel Code -->--}}
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
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#" id="search" ><span class="fa fa-search"></span></a></li>
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

{{--<section class="filter-tour">--}}
{{--<div class="filter-wrap">--}}
{{--<form class="form-inline filter-box">--}}
{{--<div class="form-group">--}}
{{--<select name="city" class="zt-control">--}}
{{--<option value="">Select Tour</option>--}}
{{--<option value="">Yangon</option>--}}
{{--<option value="">Mandalay</option>--}}
{{--<option value="">Bangkok</option>--}}
{{--</select>--}}
{{--<span class="select-arrow"></span>--}}
{{--</div>--}}
{{----}}
{{--<div class="form-group">--}}
{{--<div class="input-icon">--}}
{{--<input type="text" class="zt-control datetimepicker"  placeholder="Check in"/>--}}
{{--<div class="input-addon"><span class="fa fa-calendar"></span></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<input type="number" class="zt-control"  placeholder="Adults" min="1" max="100" />--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<input type="number" class="zt-control"  placeholder="Childs" min="1" max="100" >--}}
{{--</div>--}}
{{--<button type="submit" class="btn zt-primary btn-lg">BOOK NOW</button>--}}
{{--</form>--}}
{{--</div>--}}
{{--</section>--}}
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In scelerisque bibendum efficitur. Etiam mattis, tortor non tincidunt euismod. Cras et maximus magna. Etiam mattis, tortor non tincidunt euismod. </p>
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
                        <li><a href="#">Top Tour</a></li>
                        <li><a href="#">New Travel</a></li>
                        <li><a href="#">How - To</a></li>
                        <li><a href="#">Tips and Tricks</a></li>
                        <li><a href="#">Best Tour</a></li>
                        <li><a href="#">Top Travel</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="footer-widget post-link-widget">
                    <div class="title">
                        <h3>USEFUL LINKS</h3>
                    </div>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">New Latest</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Destinations</a></li>
                        <li><a href="#">Company</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-widget gallery-widget">
                    <div class="title">
                        <h3>GALLERY</h3>
                    </div>
                    <ul id="gallerywidget" class="list-unstyled">
                        <li data-src="{{asset('images/tour/3.jpg')}}">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="{{asset('images/thumbnails/oia-santorini-greece-sunset-island-sea-tourism-1.png')}}" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="{{asset('images/tour/2.jpg')}}">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="{{asset('images/thumbnails/colorful-houses-with-sunshades.png')}}" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="{{asset('images/tour/1.jpg')}}">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="{{asset('images/thumbnails/india-taj-mahal-agra-architecture-travel.png')}}" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="{{asset('images/tour/4.jpg')}}">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="{{asset('images/thumbnails/santorini-greece.png')}}" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="{{asset('images/tour/5.jpg')}}">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="{{asset('images/thumbnails/pisa-tower.png')}}" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="{{asset('images/tour/building-ocean-buildings.jpg')}}">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="{{asset('images/thumbnails/toronto.jpg')}}" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="{{asset('images/tour/tram-city-urban-transport-transportation-travel.jpg')}}">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="{{asset('images/thumbnails/tram-city-urban-transport-transportation-travel.png')}}" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="{{asset('images/tour/6.jpg')}}">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="{{asset('images/thumbnails/arno-river-florence-italy-reflection-river.png')}}" alt="" />
                                </div>
                            </a>
                        </li>
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
                    @2016 Zone Tour
                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="right-text pull-right">
                    <ul class="menu-footer ">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="{{route('packages')}}">Packages</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
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