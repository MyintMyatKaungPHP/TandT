@extends('zone.layout.app')
@section('title','Zone | Travels & Tours')
@section('content')
    <section class="inner-banner">
        <div class="zt-container">
            <div class="box clearfix">
                <h2>Tour Package Detail</h2>
            </div>
        </div>
    </section>
    {{--package detail--}}
    <section class="destinations sec-padding">
        <div class="zt-container">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="destination-content-wrap">
                        <ul class="nav nav-tabs tab" role="tablist">
                            <li class="active"><a href="#viewonmap" data-toggle="tab"><span class="fa fa-map"></span> View On Map</a></li>

                            <li><a href="#itinerary" data-toggle="tab"><span class="fa fa-info-circle"></span> Itinerary</a></li>

                            <li><a href="#hotel" data-toggle="tab"><span class="fa fa-repeat"></span> Available Hotels</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="viewonmap">
                                <div class="tab-details">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9997.131062296527!2d-87.64746730347939!3d41.84627849028286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c5cebdc24c3%3A0xc7ddebb2cd527b44!2sI-94%2C+Chicago%2C+IL+60616!5e0!3m2!1svi!2s!4v1470110686691" width="600" height="450" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="tab-pane" id="itinerary">
                                <div class="tab-details">
                                    <p>Day 1</p>
                                    <ul>
                                        <li> Weeping Maui Onion Tartlets</li>
                                        <li> Dark triple chocolate Brownies</li>
                                        <li> White Chocolate Macadamia Nut Cookies</li>
                                        <li> Fresh Kona Coffee</li>
                                    </ul>
                                    <p>Day 2</p>
                                    <ul>
                                        <li> Weeping Maui Onion Tartlets</li>
                                        <li> Dark triple chocolate Brownies</li>
                                        <li> White Chocolate Macadamia Nut Cookies</li>
                                        <li> Fresh Kona Coffee</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="hotel">
                                <div class="tab-details">
                                    <ul class="menuList">
                                        <li> Assorted Cheeses and crackers</li>
                                        <li>Jumbo shrimp with Bloody Mary Cocktail Sauce</li>
                                        <li>Artichoke Heart Dip with Garlic Crostini</li>
                                        <li>Vegetable Crudite</li>
                                        <li>'Bone Appetite' Baby Back Ribs</li>
                                        <li>Honey Ginger Glazed Chicken</li>
                                        <li>Weeping Maui Onion Tartlets</li>
                                        <li>Dark triple chocolate Brownies</li>
                                        <li>White Chocolate Macadamia Nut Cookies</li>
                                        <li>Fresh Kona Coffee</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="destination-content">
                            <div class="thumbnail">
                                <img src="{{asset('images/tour/building-ocean-buildings.jpg')}}" alt=""/>
                            </div>
                            <h1>SHWE INLE TRIP (7 Days Trip)</h1>
                            <blockquote>
                                $200
                            </blockquote>
                            <p>Nam placerat at augue et vulputate. In quis ipsum ac dolor mollis suscipit. Sed a tellus tortor. Phasellus ac elit vel leo vehicula eleifend quis nec orci. Pellentesque vulputate pretium urna eget vehicula. Vestibulum eu arcu interdum, fermentum leo viverra, egestas lacus. Sed non lobortis orci. Maecenas pretium nec ante id aliquet. Maecenas leo velit, vestibulum id maximus eget. Vivamus congue hendrerit neque, ultricies pharetra nisl.</p>
                            <p>Nam iaculis neque ligula, sed semper leo facilisis nec. Maecenas ut ullamcorper urna, quis sollicitudin magna. Cras porta arcu id ex mattis, a rhoncus arcu consequat. Aenean blandit eros sit amet varius vehicula. Suspendisse tristique felis lectus, at tincidunt metus pellentesque in. Sed ornare eget velit nec faucibus.</p>
                            <img src="{{asset('images/thumbnails/zone-tour-image-califa.png')}}" height="225" width="360" alt=""/>
                            <img src="{{asset('images/thumbnails/night-traffic.png')}}" height="225" width="360" alt=""/>
                            <p>Praesent viverra consectetur elit vitae lacinia. Curabitur vitae consectetur turpis, sed tincidunt nibh. Nullam eget consequat magna. Suspendisse id laoreet felis, at consequat tortor. Nulla suscipit leo non egestas placerat. Etiam a sagittis erat. Morbi id commodo tellus. Praesent id risus arcu. Integer facilisis, erat nec facilisis pulvinar, magna risus pulvinar arcu, ut lobortis est massa et dolor. Morbi quis neque et justo malesuada laoreet. In turpis mi, cursus sed sodales nec, efficitur ut nulla. Sed faucibus ante ac elit faucibus finibus. Proin cursus ligula in erat interdum placerat. Etiam sodales nisi ut porta posuere. Aenean vehicula tellus sed molestie venenatis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="destination-sidebar-wrap sidebar-box">
                        <div class="sidebar-header">
                            <h3 class="title">Travel Information</h3>
                        </div>
                        <div class="sidebar-book sidebar-content">
                            <form class="form filter-box">
                                <div class="form-group">
                                    <b>From</b>
                                    <select name="city" class="zt-control">
                                        <option value="yangon">Yangon</option>
                                        <option value="hawaii">Hawaii</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <b>To</b>
                                    <select name="city" class="zt-control">
                                        <option value="yangon">Taung Gyi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <b>Choose Travel Type</b>
                                    <select name="city" class="zt-control">
                                        <option value="yangon">Express Car</option>
                                        <option value="yangon">Air Plane</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                    </div>
                                    <div class="sidebar-order">
                                        <div class="price">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="box-price right">
                                                    Travel Cost
                                                    <span class="number">$80</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="sidebar-header">
                            <h3 class="title">Hotel Information</h3>
                        </div>
                        <div class="sidebar-order sidebar-content">
                            <h3 class="title">Choose Hotel</h3>
                            <form class="form">
                                <select name="city" class="zt-control">
                                    <option value="yangon">Max Hotel</option>
                                    <option value="yangon">ACE Hotel</option>
                                </select>
                            </form>
                            <div class="price">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12"></div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="box-price right">
                                            Hotel Cost
                                            <span class="number">$80</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-header">
                            <h3 class="title">Total Cost For 1 Person</h3>
                        </div>
                        <div class="sidebar-order sidebar-content">
                            <div class="price">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <div class="box-price">
                                            <span class="number">$400</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="zt-flex zt-flex-center">
                                            <button type="submit" class="btn zt-primary btn-lg btn-full">BOOK NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection