<?php
function showToggle($str){
    $current_url = url()->current();
    if(array_search($str,explode('/',$current_url))){
        return 'show active';
    }else{
        return '';
    }
}
?>
<aside class="aside-container">
    <!-- START Sidebar (left)-->
    <div class="aside-inner">
        <nav class="sidebar" data-sidebar-anyclick-close="">
            <!-- START sidebar nav-->
            <ul class="sidebar-nav">
                <!-- START user info-->
                <li class="has-user-block">
                    <div class="collapse" id="user-block">
                        <div class="item user-block">
                            <!-- User picture-->
                            <div class="user-block-picture">
                                <div class="user-block-status">
                                    <img class="img-thumbnail rounded-circle" src="{{asset('images/clients/'.Auth::user()->image)}}" alt="Avatar" width="60" height="60">
                                    <div class="circle bg-success circle-lg"></div>
                                </div>
                            </div>
                            <!-- Name and Job-->
                            <div class="user-block-info">
                                <span class="user-block-name">{{Auth::user()->name}}</span>
                                <span class="user-block-role">{{Auth::user()->role}}</span>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- END user info-->
                <!-- Iterates over all sidebar items-->
                <li class="nav-heading ">
                    <span data-localize="sidebar.heading.HEADER">Main Navigation</span>
                </li>
                {{--For Dashboard--}}
                <li class=" @php echo  showToggle('dashboard'); @endphp">
                    <a href="{{route('dashboard')}}" title="Dashboard">
                        <em class="fa fa-bar-chart"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION">Dashboard</span>
                    </a>
                </li>

                {{--For Booking--}}
                <li class=" @php echo  showToggle('manage_booking'); @endphp">
                    <a href="{{route('manage_booking.index')}}" title="Booking">
                        <em class="fa fa-book"></em>
                        <span data-localize="sidebar.nav.BOOKING">Manage Booking</span>
                    </a>
                </li>

                {{-- For Tour Packages --}}
                <li class=" ">
                    <a href="#tourpackages" title="TourPackages" data-toggle="collapse">
                        <em class="fa fa-gift"></em>
                        <span data-localize="sidebar.nav.TourPackages">Tour Packages</span>
                        <span class="fa fa-sort-down ml-4"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse @php echo  showToggle('tourpackages'); @endphp"  id="tourpackages">
                        <li class="sidebar-subnav-header">Tour Packages</li>
                        <li class="@php echo  showToggle('manage_city'); @endphp">
                            <a href="{{route('manage_city.index')}}" title="City">
                                <span>Manage Cities</span>
                            </a>
                        </li>
                        <li class="@php echo  showToggle('manage_package'); @endphp">
                            <a href="{{route('manage_package.index')}}" title="TourPackages">
                                <span>Manage Tour Packages</span>
                            </a>
                        </li>
                        <li class="@php echo  showToggle('manage_hotel'); @endphp">
                            <a href="{{route('manage_hotel.index')}}" title="Hotel">
                                <span>Manage Hotels</span>
                            </a>
                        </li>
                        <li class="@php echo  showToggle('manage_route'); @endphp">
                            <a href="{{route('manage_route.index')}}" title="Route">
                                <span>Manage Routes</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- For User Management --}}
                @if(Auth::user()->role=='admin')
                    <li class=" ">
                        <a href="#usermanage" title="UserManage" data-toggle="collapse">
                            <em class="fa fa-users"></em>
                            <span data-localize="sidebar.nav.UserManage">User Management</span>
                            <span class="fa fa-sort-down ml-4"></span>
                        </a>
                        <ul class="sidebar-nav sidebar-subnav collapse @php echo  showToggle('manage_user'); @endphp"  id="usermanage">
                            <li class="sidebar-subnav-header">User Management</li>
                            <li class="@php echo  showToggle('manage_user'); @endphp">
                                <a href="{{route('manage_user.index')}}" title="ManageUser">
                                    <span>Manage Users</span>
                                </a>
                            </li>
                            <li class="@php echo  showToggle('blacklist'); @endphp">
                                <a href="{{route('blacklist.index')}}" title="Blacklist">
                                    <span>Blacklist Users</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" @php echo  showToggle('between/report'); @endphp">
                        <a href="{{route('between.report')}}" title="Report">
                            <em class="fa fa-file-code-o"></em>
                            <span data-localize="sidebar.nav.REPORT">Generate Report</span>
                        </a>
                    </li>
                @endif

                {{-- Go To Website (front-end) --}}
                <li class="nav-heading ">
                    <span data-localize="sidebar.heading.HEADER">Go To Website</span>
                </li>
                <li class=" ">
                    <a href="{{route('zone')}}" title="website">
                        <img class="img-fluid" src="{{asset('images/favicon.ico')}}"  alt="App Logo">
                        <span data-localize="sidebar.nav.website"> Zone Website</span>
                    </a>
                </li>

                {{-- Logout button --}}
                <li class=" ">
                    <a href="{{route('user.logout')}}" class="btn btn-outline-danger" title="logout">
                        <em class="icon-logout"></em>
                        <span data-localize="sidebar.nav.website">Logout</span>
                    </a>
                </li>
            </ul>
            <!-- END sidebar nav-->
        </nav>
    </div>
    <!-- END Sidebar (left)-->
</aside>