@extends('zone.layout.app')
@section('title','Zone | Travels & Tours')
@section('content')
      @include('zone.layout.banner')
      {{--Search--}}
      <section class="filter-tour">
         <div class="filter-wrap">
            <form class="form-inline filter-box" action="{{route('search_city_package')}}" method="post">
               {{csrf_field()}}
               <div class="form-group">
                  <b>Where you want to travel?</b>
                  <select name="city" class="zt-control">
                     @foreach($cities as $city)
                        <option value="{{$city->city_id}}">{{$city->cities->name}}</option>
                     @endforeach
                  </select>
                  <span class="select-arrow"></span>
               </div>
               <button type="submit" class="btn zt-primary btn-lg">Search</button>
            </form>
         </div>
      </section>
      {{--Vision Mision--}}
      <section class="choose-tour sec-padding sec-padding-top-large">
         <div class="zt-container">
            <div class="sec-title text-center sec-title-padding">
               <h2>Why choose us?</h2>
               <span class="tagline">Let me <b>Plan</b> your <b>Travelling</b></span>
               <span class="img-border"></span>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="box-awesome-service">
                     <div class="box-icon">
                        <span class="flaticon-big-compass"></span>
                     </div>
                     <div class="box-text">
                        <h3>Best Places</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse placerat urna a vehicula bibendum, cras erat ipsum.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="box-awesome-service">
                     <div class="box-icon">
                        <span class="flaticon-save"></span>
                     </div>
                     <div class="box-text">
                        <h3>Comfortable Transportation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse placerat urna a vehicula bibendum, cras erat ipsum.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="box-awesome-service">
                     <div class="box-icon">
                        <span class="flaticon-big-flag-waving"></span>
                     </div>
                     <div class="box-text">
                        <h3>Peaceful Hotels</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse placerat urna a vehicula bibendum, cras erat ipsum.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      {{--Profile Video--}}
      <section class="video-tour sec-padding sec-bg-default">
         <div class="zt-container">
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="img-video-box">
                     <script src="http://fast.wistia.com/embed/medias/p275jaus7k.jsonp" async></script>
                     <script src="{{asset('zone_asset/fast.wistia.com/assets/external/E-v1.js')}}" async></script>
                     <div class="wistia_responsive_padding">
                        <div class="wistia_responsive_wrapper">
                           <span class="wistia_embed wistia_async_p275jaus7k popover=true popoverAnimateThumbnail=true popoverContent=link videoFoam=true">
                              <a href="#" class="zt-flex zt-flex-center zt-flex-middle">
                                 <span class="overlay-play"></span>
                              </a>
                           </span>
                           <img src="{{asset('images/videos-1.jpg')}}" alt=""/>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 pdl100">
                  <div class="sec-title">
                     <h2>VIDEO OF ZONE TOUR</h2>
                     <span class="tagline">Proin commodo, elit in iaculis laoreet.</span>
                  </div>
                  <p>Fusce lobortis elit est, aliquam pulvinar ex vestibulum ut. Etiam tincidunt tempor massa, sed consectetur eros rutrum et. Nunc sit amet faucibus justo. Cras interdum velit vitae lectus imperdiet, vitae egestas neque accumsan. Sed sed turpis nulla. Phasellus a volutpat ipsum, vitae rhoncus lorem.</p>
                  <a href="#" class="btn zt-primary btn-read-more">Read more</a>
               </div>
            </div>
         </div>
      </section>

      {{--Special Tour Packages--}}
      <section class="latest-news sec-padding-top even">
         <div class="zt-container">
            <div class="sec-title text-center sec-title-padding">
               <h2>Special Tour Packages</h2>
               <span class="tagline">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</span>
               <span class="img-border"></span>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="single-latest-news">
                     <div class="img-box">
                        <img src="{{asset('images/blog/sweet-ont-the-beach.png')}}" alt=""/>
                     </div>
                     <div class="text-box position-relative">
                        <span class="angle-up"></span>
                        <h3>Sweet Love On The Beach</h3>
                        <p>Honeymoon</p>
                        <a href="{{route('search_package_type','honeymoon')}}" class="latest-read-more">Read more <span class="color-primary fa fa-angle-double-right"></span></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="single-latest-news">
                     <div class="img-box">
                        <img src="{{asset('images/blog/cool-place-visit-full-house.png')}}" alt=""/>
                     </div>
                     <div class="text-box position-relative">
                        <span class="angle-up"></span>
                        <h3>Vacation Trip</h3>
                        <p>Etiam mattis, tortor non tincidunt euismod, ipsum arcu condimentum ligula, at ornare dolor turpis id massa. Ut sit amet augue lobortis lacus scelerisque volutpat.</p>
                        <a href="{{route('search_package_type','vacation')}}" class="latest-read-more">Read more <span class="color-primary fa fa-angle-double-right"></span></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="single-latest-news">
                     <div class="img-box">
                        <img src="{{asset('images/blog/color-aloft-balloon-festivan.png')}}" alt=""/>
                     </div>
                     <div class="text-box position-relative">
                        <span class="angle-up"></span>
                        <h3>Sightseeing Trip</h3>
                        <p>Etiam mattis, tortor non tincidunt euismod, ipsum arcu condimentum ligula, at ornare dolor turpis id massa. Ut sit amet augue lobortis lacus scelerisque volutpat.</p>
                        <a href="{{route('search_package_type','sightseeing')}}" class="latest-read-more">Read more <span class="color-primary fa fa-angle-double-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      {{--Latest Tour Packages--}}
      <section class="popular-services sec-padding home-two">
         <div class="sec-title text-center sec-title-padding">
            <h2>Latest Tour Packages</h2>
            <span class="tagline">Let me <b>Plan</b> your <b>Travelling</b></span>
            <span class="img-border"></span>
         </div>
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
                        <div class="excert">
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
         </div>
      </section>

      {{--Gallery--}}
      <section class="gallery-member sec-padding-top">
         <div class="sec-title text-center sec-title-padding">
            <h2>Gallery</h2>
            <span class="tagline">Travel photos</span>
            <span class="img-border"></span>
         </div>
         <ul id="gallerymember" class="list-unstyled row row-collapse">
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/bgn.jpeg')}}"  data-sub-html="<h4>Bagan</h4><p>June 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">Bagan Tour</h3>
                           <p>June 03, 2018</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/bgn.jpeg')}}" style="height: 300px !important;" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/mdy1.jpg')}}" data-sub-html="<h4>Mandalay Tour</h4><p>June 03, 2018</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">Mandalay Tour</h3>
                           <p>June 03, 2018</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/mdy1.jpg')}}" style="height: 300px !important;" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/inle.jpg')}}" data-sub-html="<h4>Inle Tour</h4><p>June 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">Inle Tour</h3>
                           <p>June 03, 2018</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/inle.jpg')}}" style="height: 300px !important;" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/shwedagon.jpg')}}" data-sub-html="<h4>Yangon Tour</h4><p>June 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">Yangon Tour</h3>
                           <p>July 04, 2018</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/shwedagon.jpg')}}" style="height: 300px !important;" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('mages/tour/sule.jpg')}}" data-sub-html="<h4>Yangon Tour</h4><p>July 04, 2018</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">Yangon Tour</h3>
                           <p>July 04, 2018</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/sule.jpg')}}" style="height: 300px !important;" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/img1.jpg')}}" data-sub-html="<h4>Bagan Tour</h4><p>June 11, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">Bagan Tour</h3>
                           <p>June 11, 2018</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/img1.jpg')}}" style="height: 300px !important;" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/img2.jpg')}}" data-sub-html="<h4>Taunggyi Trip</h4><p>Aug 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">Taunggyi</h3>
                           <p>Aug 03, 2016</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/img2.jpg')}}" style="height: 300px !important;" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/img3.jpg')}}" data-sub-html="<h4>Bagan Tour</h4><p>Sept 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">Bagan Tour</h3>
                           <p>Sept 03, 2016</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/img3.jpg')}}" style="height: 300px !important;" alt=""/>
                  </div>
               </a>
            </li>
         </ul>
      </section>

      {{--Partners--}}
      <section class="our-partners sec-padding">
         <div class="zt-container">
            <div class="sec-title text-center sec-title-padding">
               <h2>our partners</h2>
               <span class="tagline">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</span>
               <span class="img-border"></span>
            </div>
            <div class="our-partners-carousel">
               <div class="owl-carousel">
                  <div class="item">
                     <a href="http://accor.com" target="_blank">
                        <img src="{{asset('images/carousel/accor.png')}}" style="height: 100px !important;" alt=""/>
                     </a>
                  </div>
                  <div class="item">
                     <a href="https://www.accorhotels.com" target="_blank">
                        <img src="{{asset('images/carousel/novotel.png')}}" style="height: 100px !important;" alt=""/>
                     </a>
                  </div>
                  <div class="item">
                     <a href="http://www.sedonahotels.com.sg/yangon/" target="_blank">
                        <img src="{{asset('images/carousel/sedona.png')}}" style="height: 100px !important;" alt=""/>
                     </a>
                  </div>
                  <div class="item">
                     <a href="http://www.shangri-la.com" target="_blank">
                        <img src="{{asset('images/carousel/shangrila.png')}}" style="height: 100px !important;" lt=""/>
                     </a>
                  </div>
                  <div class="item">
                     <a href="https://www.inyalakehotel.com/" target="_blank">
                        <img src="{{asset('images/carousel/inya.png')}}" style="height: 100px !important;" alt=""/>
                     </a>
                  </div>
                  <div class="item">
                     <a href="https://www.lottehotel.com/yangon-hotel/en/information.html" target="_blank">
                        <img src="{{asset('images/carousel/lotte.png')}}" style="height: 100px !important;" alt=""/>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection