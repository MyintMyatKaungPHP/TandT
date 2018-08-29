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
                                    <img class="img-thumbnail rounded-circle" src="{{asset('dashboard_asset/img/user/02.jpg')}}" alt="Avatar" width="60" height="60">
                                    <div class="circle bg-success circle-lg"></div>
                                </div>
                            </div>
                            <!-- Name and Job-->
                            <div class="user-block-info">
                                <span class="user-block-name">Myint Myat Kaung</span>
                                <span class="user-block-role">Admin</span>
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
                    <a href="{{route('dashboard.index')}}" title="Documentation">
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION">Dashboard</span>
                    </a>
                </li>
                {{-- Other Link Here --}}
                
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