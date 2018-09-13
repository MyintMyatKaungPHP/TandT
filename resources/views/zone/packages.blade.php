@extends('zone.layout.app')
@section('title','Zone | Tour Packages')
@section('content')
    <section class="inner-banner">
        <div class="zt-container">
            <div class="box clearfix">
                <h2>Tour Packages</h2>
            </div>
        </div>
    </section>
    <section class="popular-services sec-padding home-two">
        <div class="zt-container">
            <div class="row">
                @foreach($packages as $p)
                    <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="tour-list-box text-center">
                        <div class="img-box zt-overlay">
                            <div class="zt-overlay-panel zt-flex zt-flex-right text-center">
                                <div class="box-wrap-img zt-overlay-background zt-flex zt-flex-middle">
                                    <div class="box-padding">
                                        <div class="box-item font-bold">
                                            <span class="color-primary">Duration</span>
                                            {{$p->duration}} days
                                        </div>
                                        <div class="driver"></div>
                                        <div class="box-item font-bold">
                                            <span class="color-primary">Destination</span>
                                            {{$p->cities->name}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $img = explode(',',$p->images); ?>
                            <img src="{{asset('images/tour/'.$img[0])}}" alt="" />
                        </div>
                        <div class="box-content">
                            <h3>{{$p->title}}</h3>
                            <div class="excert" style="height: 60px;">
                                <?php
                                    echo strip_tags(substr($p->description,0,100));
                                    echo "<b>...</b>";
                                ?>
                            </div>
                            <a href="{{route('package_detail',$p->id)}}" class="btn zt-default btn-lg">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="pagination-wrap">
                {{$packages->links()}}
                {{--<ul class="pagination">--}}
                    {{--<li><a href="#">&laquo;</a></li>--}}
                    {{--<li><a href="#">1</a></li>--}}
                    {{--<li><a href="#">2</a></li>--}}
                    {{--<li class="active"><span class="">3</span></li>--}}
                    {{--<li><a href="#">4</a></li>--}}
                    {{--<li><a href="#">5</a></li>--}}
                    {{--<li><a href="#">&raquo;</a></li>--}}
                {{--</ul>--}}
            </div>
        </div>
    </section>
    @endsection