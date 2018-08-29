@extends('zone.layout.app')
@section('title','Zone | Home')
@section('content')
      @include('zone.layout.banner')
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
      <section class="popular-services sec-padding">
         <div class="zt-container">
            <div class="sec-title text-center sec-title-padding">
               <h2>Latest Tour Packages</h2>
               <span class="tagline">Quisque venenatis porta eleifend. Phasellus vehicula malesuada quam, a condimentum mauris dignissim vulputate.</span>
               <span class="img-border"></span>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6 col-xs-6">
                  <div class="tour-list-box text-center zt-overlay zt-overlay-hover">
                     <div class="img-box position-relative">
                        <div class="zt-overlay-panel zt-overlay-background zt-overlay-slide-top zt-flex zt-flex-center zt-flex-middle text-center">
                           <a href="#" class="btn zt-default btn-lg">Book Now</a>
                        </div>
                        <img src="{{asset('images/thumbnails/toronto.jpg')}}" alt=""/>
                     </div>
                     <div class="box-content">
                        <h3>TORONTO</h3>
                        <div class="rating">
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star"></span>
                        </div>
                        <div class="driver"></div>
                        <span class="duration">Duration: 2 Hours <br/> Opening: 8Am - 10Am</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-6">
                  <div class="tour-list-box text-center zt-overlay zt-overlay-hover">
                     <div class="img-box position-relative">
                        <div class="zt-overlay-panel zt-overlay-background zt-overlay-slide-top zt-flex zt-flex-center zt-flex-middle text-center">
                           <a href="#" class="btn zt-default btn-lg">Book Now</a>
                        </div>
                        <img src="{{asset('images/thumbnails/mumbai.jpg')}}" alt=""/>
                     </div>
                     <div class="box-content">
                        <h3>MUMBAI</h3>
                        <div class="rating">
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star"></span>
                        </div>
                        <div class="driver"></div>
                        <span class="duration">Duration: 2 Hours <br/> Opening: 8Am - 10Am</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-6">
                  <div class="tour-list-box text-center zt-overlay zt-overlay-hover">
                     <div class="img-box position-relative">
                        <div class="zt-overlay-panel zt-overlay-background zt-overlay-slide-top zt-flex zt-flex-center zt-flex-middle text-center">
                           <a href="#" class="btn zt-default btn-lg">Book Now</a>
                        </div>
                        <img src="{{asset('images/thumbnails/sydney.jpg')}}" alt=""/>
                     </div>
                     <div class="box-content">
                        <h3>SYDNEY</h3>
                        <div class="rating">
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                        </div>
                        <div class="driver"></div>
                        <span class="duration">Duration: 2 Hours <br/> Opening: 8Am - 10Am</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-6">
                  <div class="tour-list-box text-center zt-overlay zt-overlay-hover">
                     <div class="img-box position-relative">
                        <div class="zt-overlay-panel zt-overlay-background zt-overlay-slide-top zt-flex zt-flex-center zt-flex-middle text-center">
                           <a href="#" class="btn zt-default btn-lg">Book Now</a>
                        </div>
                        <img src="{{asset('images/thumbnails/newyork.png')}}" alt=""/>
                     </div>
                     <div class="box-content">
                        <h3>NEWYORK</h3>
                        <div class="rating">
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                        </div>
                        <div class="driver"></div>
                        <span class="duration">Duration: 2 Hours <br/> Opening: 8Am - 10Am</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-6">
                  <div class="tour-list-box text-center zt-overlay zt-overlay-hover">
                     <div class="img-box position-relative">
                        <div class="zt-overlay-panel zt-overlay-background zt-overlay-slide-top zt-flex zt-flex-center zt-flex-middle text-center">
                           <a href="#" class="btn zt-default btn-lg">Book Now</a>
                        </div>
                        <img src="{{asset('images/thumbnails/machu-pichu.png')}}" alt=""/>
                     </div>
                     <div class="box-content">
                        <h3>MACHU PICHU</h3>
                        <div class="rating">
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                        </div>
                        <div class="driver"></div>
                        <span class="duration">Duration: 2 Hours <br/> Opening: 8Am - 10Am</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-6">
                  <div class="tour-list-box text-center zt-overlay zt-overlay-hover">
                     <div class="img-box position-relative">
                        <div class="zt-overlay-panel zt-overlay-background zt-overlay-slide-top zt-flex zt-flex-center zt-flex-middle text-center">
                           <a href="#" class="btn zt-default btn-lg">Book Now</a>
                        </div>
                        <img src="{{asset('images/thumbnails/paris.png')}}" alt=""/>
                     </div>
                     <div class="box-content">
                        <h3>PARIS</h3>
                        <div class="rating">
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star"></span>
                        </div>
                        <div class="driver"></div>
                        <span class="duration">Duration: 2 Hours <br/> Opening: 8Am - 10Am</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="famous-locations">
         <ul class="famous-slider text-white">
            <li class="item">
               <div class="row">
                  <div class="col-md-5 col-sm-5 hidden-xs">
                     <img src="{{asset('images/mt-fuji-sea-of-clouds-sunrise1.png')}}" alt=""/>
                  </div>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                     <div class="position-relative">
                        <div class="content">
                           <h3>TOP 5 famous locations</h3>
                           <div class="famous-locations-meta"><span class="number">01.</span> Japan</div>
                           <p>Aenean dui dui, semper eget orci id, sagittis ultricies sem. Fusce laoreet consequat nunc in fermentum. Nulla in faucibus ipsum, sed aliquet nulla. Vivamus ac nibh erat. Proin ut orci ac lacus bibendum efficitur non sit amet arcu.</p>
                           <p>Vivamus aliquet est ac urna sodales, in volutpat leo viverra. Aenean ex ante, consequat id orci in, gravida commodo dui. Nunc vestibulum, eros dapibus rhoncus luctus, diam odio accumsan lectus, non consectetur elit felis vitae eros.</p>
                           <a href="#" class="btn zt-default btn-lg" >Read more</a>
                        </div>
                        <div class="map-location">
                           <img src="{{asset('images/map1-1.png')}}" alt=""/>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="item">
               <div class="row">
                  <div class="col-md-5 col-sm-5 hidden-xs">
                     <img src="{{asset('images/zone-tour-image-2.png')}}" alt=""/>
                  </div>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                     <div class="position-relative">
                        <div class="content">
                           <h3>TOP 5 famous locations</h3>
                           <div class="famous-locations-meta"><span class="number">02.</span> Brazil</div>
                           <p>Aenean dui dui, semper eget orci id, sagittis ultricies sem. Fusce laoreet consequat nunc in fermentum. Nulla in faucibus ipsum, sed aliquet nulla. Vivamus ac nibh erat. Proin ut orci ac lacus bibendum efficitur non sit amet arcu.</p>
                           <p>Vivamus aliquet est ac urna sodales, in volutpat leo viverra. Aenean ex ante, consequat id orci in, gravida commodo dui. Nunc vestibulum, eros dapibus rhoncus luctus, diam odio accumsan lectus, non consectetur elit felis vitae eros.</p>
                           <a href="#" class="btn zt-default btn-lg" >Read more</a>
                        </div>
                        <div class="map-location">
                           <img src="{{asset('images/map-japan.png')}}" alt=""/>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
         </ul>
      </section>
      <section class="clients-says sec-padding">
         <div class="zt-container">
            <div class="sec-title text-center sec-title-padding">
               <h2>what our clients says</h2>
               <span class="tagline">Phasellus vehicula malesuada quam, a condimentum mauris dignissim vulputate.</span>
               <span class="img-border"></span>
            </div>
            <div class="clients-says-content position-relative">
               <ul class="clients-slider">
                  <li class="item">
                     <p>“ Consectetur adipiscing elit. Etiam eu gravida risus. Aenean lacinia lacus ac nibh bibendum,<br/> non mollis urna pellentesque. Maecenas suscipit justo elit."</p>
                     <div class="meta-profile"><span class="color-primary">- Emily Henderson,</span> U.S.A </div>
                  </li>
                  <li class="item">
                     <p>“ Consectetur adipiscing elit. Etiam eu gravida risus. Aenean lacinia lacus ac nibh bibendum,<br/> non mollis urna pellentesque. Maecenas suscipit justo elit."</p>
                     <div class="meta-profile"><span class="color-primary">- Emily Henderson,</span> U.S.A </div>
                  </li>
                  <li class="item">
                     <p>“ Consectetur adipiscing elit. Etiam eu gravida risus. Aenean lacinia lacus ac nibh bibendum,<br/> non mollis urna pellentesque. Maecenas suscipit justo elit."</p>
                     <div class="meta-profile"><span class="color-primary">- Emily Henderson,</span> U.S.A </div>
                  </li>
               </ul>
               <div id="clients-pager" class="slider-thumbnail zt-flex zt-flex-center">
                  <div class="slider-thumbnail-item">
                     <a data-slide-index="0" href="#" class="zt-overlay">
                        <div class="zt-overlay-background zt-overlay-panel zt-overlay-circular zt-overlay-opacity"></div>
                        <img class="img circular" src="{{asset('images/thumbnails/team-member-2.jpg')}}" alt=""/>
                     </a>
                  </div>
                  <div class="slider-thumbnail-item">
                     <a data-slide-index="1" href="#" class="zt-overlay active">
                        <div class="zt-overlay-background zt-overlay-panel zt-overlay-circular zt-overlay-opacity"></div>
                        <img class="img circular" src="{{asset('images/thumbnails/team-member-1.jpg')}}" alt=""/>
                     </a>
                  </div>
                  <div class="slider-thumbnail-item">
                     <a data-slide-index="2" href="#" class="zt-overlay">
                        <div class="zt-overlay-background zt-overlay-panel zt-overlay-circular zt-overlay-opacity"></div>
                        <img class="img circular" src="{{asset('images/thumbnails/team-member-3.jpg')}}" alt=""/>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="stuning-beachs text-center sec-padding text-white">
         <div class="zt-container">
            <div class="sec-title text-center">
               <h2>explore the stunning beaches</h2>
               <span class="tagline">Curabitur vehicula, massa sit amet ultrices sollicitudin, lectus mi faucibus urna, a feugiat odio tellus congue <br/>arcu. Pellentesque aliquet ipsum a tincidunt commodo. </span>
            </div>
            <a href="#" class="btn zt-primary btn-lg">Book now <span class="fa fa-send"></span></a>
         </div>
      </section>
      <section class="gallery-member sec-padding-top">
         <div class="sec-title text-center sec-title-padding">
            <h2>Gallery from members</h2>
            <span class="tagline">Phasellus vehicula malesuada quam, a condimentum mauris dignissim vulputate.</span>
            <span class="img-border"></span>
         </div>
         <ul id="gallerymember" class="list-unstyled row row-collapse">
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/1.jpg')}}" data-sub-html="<h4>India Tour</h4><p>June 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">India Tour</h3>
                           <p>June 03, 2016</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/india-taj-mahal-agra-architecture-travel.png')}}" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/2.jpg')}}" data-sub-html="<h4>India Tour</h4><p>June 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">India Tour</h3>
                           <p>June 03, 2016</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/colorful-houses-with-sunshades.png')}}" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/3.jpg')}}" data-sub-html="<h4>India Tour</h4><p>June 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">India Tour</h3>
                           <p>June 03, 2016</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/oia-santorini-greece-sunset-island-sea-tourism-1.png')}}" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/4.jpg')}}" data-sub-html="<h4>India Tour</h4><p>June 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">India Tour</h3>
                           <p>June 03, 2016</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/santorini-greece.png')}}" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('mages/tour/5.jpg')}}" data-sub-html="<h4>India Tour</h4><p>June 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">India Tour</h3>
                           <p>June 03, 2016</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/pisa-tower.png')}}" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/6.jpg')}}" data-sub-html="<h4>India Tour</h4><p>June 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">India Tour</h3>
                           <p>June 03, 2016</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/arno-river-florence-italy-reflection-river.png')}}" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/7.jpg')}}" data-sub-html="<h4>India Tour</h4><p>June 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">India Tour</h3>
                           <p>June 03, 2016</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/5825408292_11759e3304_o.png')}}" alt=""/>
                  </div>
               </a>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-6" data-responsive="" data-src="{{asset('images/tour/8.jpg')}}" data-sub-html="<h4>India Tour</h4><p>June 03, 2016</p>">
               <a href="#">
                  <div class="img-box zt-overlay zt-overlay-hover">
                     <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                        <div class="box-gallery">
                           <h3 class="color-primary">India Tour</h3>
                           <p>June 03, 2016</p>
                        </div>
                     </div>
                     <img src="{{asset('images/thumbnails/6979633505_d042009b47_k.png')}}" alt=""/>
                  </div>
               </a>
            </li>
         </ul>
      </section>
      <section class="latest-news sec-padding-top even">
         <div class="zt-container">
            <div class="sec-title text-center sec-title-padding">
               <h2>Latest News</h2>
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
                        <span class="meta-blog">June 06,2016 | By Angelina Jolie</span>
                        <p>Etiam mattis, tortor non tincidunt euismod, ipsum arcu condimentum ligula, at ornare dolor turpis id massa. Ut sit amet augue lobortis lacus scelerisque volutpat.</p>
                        <a href="#" class="latest-read-more">Read more <span class="color-primary fa fa-angle-double-right"></span></a>
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
                        <h3>Cool place visit Full house</h3>
                        <span class="meta-blog">June 06,2016 | By Angelina Jolie</span>
                        <p>Etiam mattis, tortor non tincidunt euismod, ipsum arcu condimentum ligula, at ornare dolor turpis id massa. Ut sit amet augue lobortis lacus scelerisque volutpat.</p>
                        <a href="#" class="latest-read-more">Read more <span class="color-primary fa fa-angle-double-right"></span></a>
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
                        <h3>Color Aloft Balloon Festival</h3>
                        <span class="meta-blog">June 06,2016 | By Angelina Jolie</span>
                        <p>Etiam mattis, tortor non tincidunt euismod, ipsum arcu condimentum ligula, at ornare dolor turpis id massa. Ut sit amet augue lobortis lacus scelerisque volutpat.</p>
                        <a href="#" class="latest-read-more">Read more <span class="color-primary fa fa-angle-double-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
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
                     <img src="{{asset('images/carousel/themeforest.png')}}" alt=""/>
                  </div>
                  <div class="item">
                     <img src="{{asset('images/carousel/audiojungle.png')}}" alt=""/>
                  </div>
                  <div class="item">
                     <img src="{{asset('images/carousel/photodune.png')}}" alt=""/>
                  </div>
                  <div class="item">
                     <img src="{{asset('images/carousel/graphicriver.png')}}" alt=""/>
                  </div>
                  <div class="item">
                     <img src="{{asset('images/carousel/themeforest.png')}}" alt=""/>
                  </div>
                  <div class="item">
                     <img src="{{asset('images/carousel/audiojungle.png')}}" alt=""/>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="footer-top-cta sec-padding-medium text-white">
         <div class="zt-container">
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="sec-title text-left">
                     <h2>SUBSCRIBE NEWSLETTERS</h2>
                     <span class="tagline">Vivamus felis justo, venenatis eget massa nec, imperdiet maximus lectus.</span>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <form class="form zt-flex zt-flex-middle zt-flex-center">
                     <div class="form-group">
                        <div class="input-icon">
                           <input type="text" class="form-control"  placeholder="Enter your email...">
                           <div class="input-addon"><span class="fa fa-send"></span></div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
@endsection