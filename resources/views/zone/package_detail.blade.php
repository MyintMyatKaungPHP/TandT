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
                <form class="form filter-box" action="{{route('bookingForm')}}" method="post">
                    {{csrf_field()}}
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
                                        <iframe src="{{$package->geo_location}}" width="600" height="450" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="tab-pane" id="itinerary">
                                    <div class="tab-details">
                                        <?php echo $package->itinerary; ?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="hotel">
                                    <div class="tab-details">
                                        <ul class="menuList">
                                            @foreach($hotels as $hotel)
                                                <li><a href="{{$hotel->link}}" target="_blank">{{$hotel->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="destination-content">
                                <h1>{{$package->title}} - {{$package->duration}} Day(s)</h1>
                                <h1>Tour Package Cost - <b id="package_price" style="color: orange;" >{{$package->price}}</b> Kyats</h1>
                                <span> </span>

                                <div class="thumbnail">
                                    <?php $img = explode(',',$package->images); ?>
                                    <img src="{{asset('images/tour/'.$img[0])}}" alt=""/>
                                </div>
                                <p><?php echo $package->description; ?></p>
                                <img src="{{asset('images/tour/'.$img[1])}}" height="225" width="360" alt=""/>
                                <img src="{{asset('images/tour/'.$img[2])}}" height="225" width="360" alt=""/>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="destination-sidebar-wrap sidebar-box">
                            <div class="sidebar-header">
                                <h3 class="title">Route Information</h3>
                            </div>
                            <div class="sidebar-book sidebar-content">

                                    <div class="form-group">
                                        <b>From</b>
                                        <select name="city" class="zt-control" id="from_city">
                                            @foreach($from_city as $route)
                                                <option value="{{$route->from_city}}">{{$route->from_city}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <b>To</b>
                                        <select name="city" class="zt-control" id="to_city">
                                            <option value="{{$to_city->name}}">{{$to_city->name}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <b>Choose Travel Type</b>
                                        <select name="city" id="type" class="zt-control">

                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="sidebar-order">
                                            <div class="price">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="box-price right">
                                                        <div>Travel Cost</div>
                                                        <span class="number" id="route_price">Choose Travel Type</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="sidebar-header">
                                <h3 class="title">Hotel Information</h3>
                            </div>
                            <div class="sidebar-order sidebar-content">
                                <h3 class="title">Choose Hotel</h3>

                                    <select name="city" id="ho" class="zt-control">

                                    </select>
                                <div class="price">
                                    <div class="row">

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="box-price right">
                                                <div >Hotel Cost For (<i id="duration">{{$package->duration}}</i>) days</div>
                                                <span class="number" id="ho_price">Choose Hotel</span>
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
                                                <span class="number" style="font-size: 36px!important;" id="total">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="zt-flex zt-flex-center">
                                                <input type="hidden" name="package_id" value="{{$package_id}}">
                                                <input type="hidden" name="route_id" value="" id="frm_route_id">
                                                <input type="hidden" name="hotel_id" value="" id="frm_hotel_id">
                                                <input type="submit"  class="btn zt-primary btn-lg btn-full" id="frm_submit" value="Booking">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function(){

            var to_city = $('#to_city');
            var from_city = $('#from_city');
            var route_price = $('#route_price');
            var base_url = location.host;
            var type = $('#type');
            var ho = $('#ho');
            var ho_price = $('#ho_price');
            var duration = $('#duration');
            var package_price = $('#package_price');
            // $('#frm_submit').attr = 'hello'
            // if($('#frm_route_id').empty() || $('#frm_hotel_id').empty() || $('#frm_total_price').empty()){
            //     alert('ok fuck up')
            //     var submit = $('#frm_submit');
            //     submit.attr('disabled','fuck')
            //     submit.val('Choose Hotel & Route')
            // }else if(parseInt($('#total').val()) > 0){
            //     submit.attr('disabled','false')
            // }

            if(from_city.val() == to_city.val){
                route_price.text(0);
            }

                if(from_city.val() == to_city.val()){
                    route_price.text(0);
                }
                $.ajax({
                    url:'http://'+base_url+'/travel/type/'+from_city.val()+'/'+to_city.val(),
                    method:'GET',
                    success:function(data){
                        type.html(data)
                    }
                })
            ////////////////////////////////////////////////////////////////////////////////////////////////
                type.load(function(){
                    $.ajax({
                        url:'http://'+base_url+'/travel/price/'+type.val(),
                        method:'GET',
                        success:function(data){
                            var route_detail = JSON.parse($data)
                            route_price.text(route_detail.price);
                            $('#frm_route_id').val(route_detail.route_id)
                        }
                    })
                })

            from_city.click(function(){
               if(from_city.val() == to_city.val()){
                   route_price.text(0);
               }
               $.ajax({
                    url:'http://'+base_url+'/travel/type/'+from_city.val()+'/'+to_city.val(),
                    method:'GET',
                    success:function(data){
                        type.html(data)
                    }
               })
            })

            type.click(function(){
                $.ajax({
                    url:'http://'+base_url+'/travel/price/'+type.val(),
                    method:'GET',
                    success:function(data){
                        //route_price.text(data);

                        var route_detail = JSON.parse(data)
                        route_price.text(route_detail.price);
                        $('#frm_route_id').val(route_detail.route_id)

                        total =parseInt(package_price.html()) + parseInt(ho_price.html()) +  parseInt(route_price.html());
                        $('#total').text(total)
                        $('#frm_total_price').val(total)
                    }
                })
            })

            //check hotel
            $.ajax({
                url:'http://'+base_url+'/travel/hotel/'+to_city.val(),
                method:'GET',
                success:function(d){
                    ho.html(d);
                }
            })

            ho.click(function(){
                $.ajax({
                    url:'http://'+base_url+'/travel/hotelprice/'+ho.val(),
                    method:'GET',
                    success:function(data){
                        var detail = JSON.parse(data)
                        ho_price.text(detail.price*duration.html());
                        $('#frm_hotel_id').val(detail.hotel_id)
                        total =parseInt(package_price.html()) + parseInt(ho_price.html()) +  parseInt(route_price.html());
                        $('#total').text(total)
                        $('#frm_total_price').val(total)
                    }
                })
            })
        })
    </script>
@endsection
