<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Cinema Ticketing">
    <title>Dashboard - Travels & Tours Agency</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/font-awesome/css/font-awesome.css')}}">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/animate.css/animate.css')}}">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/vendor/whirl/dist/whirl.css')}}">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/css/bootstrap.css')}}" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('dashboard_asset/css/app.css')}}" id="maincss">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
    @yield('css')
</head>

<body>
<div class="wrapper">
    <!-- top navbar-->
    <header class="topnavbar-wrapper">
        <!-- START Top Navbar-->
        <nav class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
                <a class="navbar-brand" href="" style="color: black;">
                    <div class="brand-logo">
                        Zone Travels & Tours
                    </div>
                    <div class="brand-logo-collapsed">
                        <img class="img-fluid" src="{{asset('images/favicon.ico')}}" alt="App Logo">
                    </div>
                </a>
            </div>
            <!-- END navbar header-->
            <!-- START Left navbar-->
            <ul class="navbar-nav mr-auto flex-row">
                <li class="nav-item">
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed">
                        <em class="fa fa-navicon"></em>
                    </a>
                    <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                    <a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled" data-no-persist="true">
                        <em class="fa fa-navicon"></em>
                    </a>
                </li>
                <!-- START User avatar toggle-->
                <li class="nav-item d-none d-md-block">
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a class="nav-link" id="user-block-toggle" href="#user-block" data-toggle="collapse">
                        <em class="icon-user"></em>
                    </a>
                </li>
                <!-- END User avatar toggle-->
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="navbar-nav flex-row">
                <!-- Search icon-->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-search-open="">
                        <em class="icon-magnifier"></em>
                    </a>
                </li>
                <!-- Fullscreen (only desktops)-->
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link" href="#" data-toggle-fullscreen="">
                        <em class="fa fa-expand"></em>
                    </a>
                </li>
                <!-- START Alert menu-->
                <li class="nav-item dropdown dropdown-list">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown">
                        <em class="icon-bell"></em>
                        <span class="badge badge-danger">11</span>
                    </a>
                    <!-- START Dropdown menu-->
                    <div class="dropdown-menu dropdown-menu-right animated flipInX">
                        <div class="dropdown-item">
                            <!-- START list group-->
                            <div class="list-group">
                                <!-- list item-->
                                <div class="list-group-item list-group-item-action">
                                    <div class="media">
                                        <div class="align-self-start mr-2">
                                            <em class="fa fa-twitter fa-2x text-info"></em>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">New followers</p>
                                            <p class="m-0 text-muted text-sm">1 new follower</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- list item-->
                                <div class="list-group-item list-group-item-action">
                                    <div class="media">
                                        <div class="align-self-start mr-2">
                                            <em class="fa fa-envelope fa-2x text-warning"></em>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">New e-mails</p>
                                            <p class="m-0 text-muted text-sm">You have 10 new emails</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- list item-->
                                <div class="list-group-item list-group-item-action">
                                    <div class="media">
                                        <div class="align-self-start mr-2">
                                            <em class="fa fa-tasks fa-2x text-success"></em>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">Pending Tasks</p>
                                            <p class="m-0 text-muted text-sm">11 pending task</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- last list item-->
                                <div class="list-group-item list-group-item-action">
                              <span class="d-flex align-items-center">
                                 <span class="text-sm">More notifications</span>
                                 <span class="badge badge-danger ml-auto">14</span>
                              </span>
                                </div>
                            </div>
                            <!-- END list group-->
                        </div>
                    </div>
                    <!-- END Dropdown menu-->
                </li>
                <!-- END Alert menu-->
            </ul>
            <!-- END Right Navbar-->
            <!-- START Search form-->
            <form class="navbar-form" role="search" action="http://themicon.co/theme/angle/v3.8.9.1/html5jquery-bs4/app/search.html">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Type and hit enter ...">
                    <div class="fa fa-times navbar-form-close" data-search-dismiss=""></div>
                </div>
                <button class="d-none" type="submit">Submit</button>
            </form>
            <!-- END Search form-->
        </nav>
        <!-- END Top Navbar-->
    </header>
    <!-- sidebar-->
    @include('dashboard.layout.sidebar')
    <!-- Main section-->
    <section class="section-container">
        @yield('content')
    </section>
    <!-- Page footer-->
    <footer class="footer-container">
        <span>&copy; 2018 - Zone Travels & Tours</span>
    </footer>
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<!-- MODERNIZR-->
<script src="{{asset('dashboard_asset/vendor/modernizr/modernizr.custom.js')}}"></script>
<!-- JQUERY-->
<script src="{{asset('dashboard_asset/vendor/jquery/dist/jquery.js')}}"></script>
<!-- BOOTSTRAP-->
<script src="{{asset('dashboard_asset/vendor/popper.js/dist/umd/popper.js')}}"></script>
<script src="{{asset('dashboard_asset/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- STORAGE API-->
<script src="{{asset('dashboard_asset/vendor/js-storage/js.storage.js')}}"></script>
<!-- JQUERY EASING-->
<script src="{{asset('dashboard_asset/vendor/jquery.easing/jquery.easing.js')}}"></script>
<!-- ANIMO-->
<script src="{{asset('dashboard_asset/vendor/animo/animo.js')}}"></script>
<!-- SCREENFULL-->
<script src="{{asset('dashboard_asset/vendor/screenfull/dist/screenfull.js')}}"></script>
<!-- LOCALIZE-->
<script src="{{asset('dashboard_asset/vendor/jquery-localize/dist/jquery.localize.js')}}"></script>
<!-- =============== PAGE VENDOR SCRIPTS ===============-->
<!-- =============== APP SCRIPTS ===============-->
<script src="{{asset('dashboard_asset/js/app.js')}}"></script>
@yield('script')
</body>
</html>