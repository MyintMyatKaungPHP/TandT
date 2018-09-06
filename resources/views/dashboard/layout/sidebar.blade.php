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
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION">Dashboard</span>
                    </a>
                </li>

                {{-- To Tour Packages --}}
                <li class=" ">
                    <a href="#tourpackages" title="TourPackages" data-toggle="collapse">
                        <em class="icon-graph"></em>
                        <span data-localize="sidebar.nav.TourPackages">Tour Packages</span>
                        <span class="fa fa-sort-down ml-4"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse @php echo  showToggle('tourpackages'); @endphp"  id="tourpackages">
                        <li class="sidebar-subnav-header">Tour Packages</li>
                        <li class="@php echo  showToggle('manage_city'); @endphp">
                            <a href="{{route('manage_city.index')}}" title="City">
                                <span>Manage City</span>
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

                {{-- Go To Website (front-end) --}}
                <li class="nav-heading ">
                    <span data-localize="sidebar.heading.HEADER">Go To Website</span>
                </li>
                <li class=" ">
                    <a href="{{route('zone')}}" title="website">
                        <em class="icon-doc"></em>
                        <span data-localize="sidebar.nav.website">Website</span>
                    </a>
                </li>
            </ul>
            <!-- END sidebar nav-->
        </nav>
    </div>
    <!-- END Sidebar (left)-->
</aside>