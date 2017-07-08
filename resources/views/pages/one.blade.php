@extends('layouts.master')

@section('content')


    <div class="content"><!-- Content Section -->
        <div class="explore-rooms margint30 clearfix"><!-- Explore Rooms Section -->
            <div class="container">
                <div class="row">

                    @if(isset($searchDetails))
                        <div class="title-style-2 marginb40 pos-center">
                            <h4>Travel Start Date: {{ $hotels[0]->offerDateRange->travelStartDate[2]}} / {{ $hotels[0]->offerDateRange->travelStartDate[1] }} / {{ $hotels[0]->offerDateRange->travelStartDate[0] }} AND </h4>
                            <h4>Travel End Date: {{ $hotels[0]->offerDateRange->travelEndDate[2]}} / {{ $hotels[0]->offerDateRange->travelEndDate[1] }}/ {{ $hotels[0]->offerDateRange->travelEndDate[0] }}</h4>
                            <hr>
                        </div>
                    @else
                        <div class="title-style-2 marginb40 pos-center">
                            <h3>EXPLORE OFFERS</h3>
                            <hr>
                        </div>
                    @endif

                    @if( empty($hotels->Hotel) )
                        <div class="title-style-2 marginb40 pos-center">
                            <h2> ... SORRY NO RESULT FOUND! ...</h2>
                            <hr>
                        </div>
                    @else
                        @foreach($hotels->Hotel->Hotels as $hotel)
                            <div class="col-lg-4 col-sm-6">
                                <div class="home-room-box" style="margin-bottom: 85px;">
                                    <div class="room-image">
                                        <img alt="Room Images" class="img-responsive" style="height: 223px; width: 360px" src="{{$hotel->hotelInfo->hotelImageUrl}}">
                                        <div class="home-room-details">
                                            <h5><a href="#">{{$hotel->hotelInfo->hotelName}}</a></h5>
                                            <div class="pull-left">
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i></li>
                                                    <li><i class="fa fa-flask"></i></li>
                                                    <li><i class="fa fa-umbrella"></i></li>
                                                    <li><i class="fa fa-laptop"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-details" style="height: 130px;">
                                        <p>{{$hotel->hotelInfo->description}}</p>
                                    </div>
                                    <div class="room-bottom">
                                        <div class="pull-left"><h4>{{ $hotel->hotelPricingInfo->originalPricePerNight }}$<span class="room-bottom-time">/ Day</span></h4></div>
                                        <div class="pull-right">
                                            <div class="button-style-1">
                                                <a href="#">BOOK NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>




        <div id="parallax123" class="parallax parallax-one clearfix margint60"><!-- Parallax Section -->
            <div class="support-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="support-box pos-center front">
                                        <div class="support-box-title"><i class="fa fa-phone"></i></div>
                                        <h4>CALL US</h4>
                                        <p class="margint20">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferme fentum</p>
                                    </div>
                                    <div class="support-box pos-center back">
                                        <div class="support-box-title"><i class="fa fa-phone"></i></div>
                                        <h4>PHONE NUMBER</h4>
                                        <p class="margint20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, et.<br />+61 3 8376 6284</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="support-box pos-center front">
                                        <div class="support-box-title"><i class="fa fa-envelope"></i></div>
                                        <h4>SEND US E-MAIL</h4>
                                        <p class="margint20">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferme fentum</p>
                                    </div>
                                    <div class="support-box pos-center back">
                                        <div class="support-box-title"><i class="fa fa-envelope"></i></div>
                                        <h4>E-MAIL ADDRESS</h4>
                                        <p class="margint20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, et.<br />Expedia@2035themes.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="support-box pos-center front">
                                        <div class="support-box-title"><i class="fa fa-home"></i></div>
                                        <h4>VISIT US</h4>
                                        <p class="margint20">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferme fentum</p>
                                    </div>
                                    <div class="support-box pos-center back">
                                        <div class="support-box-title"><i class="fa fa-home"></i></div>
                                        <h4>COMPANY ADDRESS</h4>
                                        <p class="margint20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, et.<br />Manhattan square. 124 avenue. Bodrum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="newsletter-section"><!-- Newsletter Section -->
            <div class="container">
                <div class="row">
                    <div class="newsletter-top pos-center margint30">
                        <img alt="Shape Image" src="img/shape.png" >
                    </div>
                    <div class="newsletter-form margint40 pos-center">
                        <div class="newsletter-wrapper">
                            <div class="pull-left">
                                <h2>Sign up newsletter</h2>
                            </div>
                            <div class="pull-left">
                                <form action="#" method="post" id="ajax-contact-form">
                                    <input type="text" placeholder="Enter a e-mail address">
                                    <input type="submit" value="SUBSCRIBE" >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer margint40"><!-- Footer Section -->
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-2 footer-logo">
                            <img alt="Logo" src="//www.expedia.com/_dms/header/logo.svg?locale=en_US&siteid=1" class="img-responsive" >
                        </div>
                        <div class="col-lg-10 col-sm-10">
                            <div class="col-lg-3 col-sm-3">
                                <h6>TOUCH WITH US</h6>
                                <ul class="footer-links">
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Google +</a></li>
                                    <li><a href="#">otels.com</a></li>
                                    <li><a href="#">Tripadvisor</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <h6>ABOUT Expedia</h6>
                                <ul class="footer-links">
                                    <li><a href="404.html">Error Page</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Single</a></li>
                                    <li><a href="category-grid.html">Category Grid</a></li>
                                    <li><a href="category-list.html">Category List</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <h6>PAGES SITE</h6>
                                <ul class="footer-links">
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="index-full-screen.html">Home Full Screen</a></li>
                                    <li><a href="left-sidebar-page.html">Left Sidebar Page</a></li>
                                    <li><a href="right-sidebar-page.html">Right Sidebar Page</a></li>
                                    <li><a href="room-single.html">Room Single</a></li>
                                    <li><a href="under-construction.html">Under Construction</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <h6>CONTACT</h6>
                                <ul class="footer-links">
                                    <li><p><i class="fa fa-map-marker"></i> Lorem ipsum dolor sit amet lorem Victoria 8011 Australia </p></li>
                                    <li><p><i class="fa fa-phone"></i> +61 3 8376 6284 </p></li>
                                    <li><p><i class="fa fa-envelope"></i> <a href="mailto:info@2035themes.com">info@2035themes.com</a></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pre-footer">
                <div class="container">
                    <div class="row">
                        <div class="pull-left"><p>© Expedia 2017</p></div>
                        <div class="pull-right">
                            <ul>
                                <li><p>CONNECT WITH US</p></li>
                                <li><a><img alt="Facebook" src="temp/orkut.png" ></a></li>
                                <li><a><img alt="Tripadvisor" src="temp/tripadvisor.png" ></a></li>
                                <li><a><img alt="Yelp" src="temp/hyves.png" ></a></li>
                                <li><a><img alt="Twitter" src="temp/skype.png" ></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection