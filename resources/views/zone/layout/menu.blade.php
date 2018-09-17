<header id="header" class="stricky home">
    <div class="zt-container clearfix">
        <div class="logo pull-left">
            <a href="{{route('zone')}}">
                <img src="{{asset('images/logo.png')}}" alt="">
            </a>
        </div>
        <nav class="nav-holder pull-right">
            <div class="nav-footer">
                <ul class="nav">
                    <li class="">
                        <a href="{{route('zone')}}">Home </a>
                    </li>
                    <li class="">
                        <a href="{{route('packages')}}">Tour Packages</a>
                    </li>
                    <li>
                        <a href="{{route('gallery')}}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{route('aboutus')}}">About</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="nav-header">
                <ul>
                    <li>
                        <a href="#"><span class="icon icon-phone"></span></a>
                        <ul class="submenu phone-box">
                            <li>
                                <div class="text-phone-number">
                                    <div class="phone-number"><a href="tel:09450020582">09450020582</a></div>
                                    <div class="time-wrap">
                                        <span class="now-is">Now is:</span>
                                        <span class="time-open">OPEN</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><button class="hidden-lg hidden-md menu-expander"><i class="fa fa-bars"></i></button></li>
                </ul>
            </div>
        </nav>
    </div>
</header>