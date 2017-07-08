<div class="slider slider-home"><!-- Slider Section -->
    <div class="flexslider slider-loading falsenav">
        <ul class="slides">
            <li>
                <div class="slider-textbox clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="slider-bar pull-left">WELCOME TO Expedia PREMIUM</div>
                            <div class="slider-triangle pull-left"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="slider-bar-under pull-left">5 STAR SUPPORT</div>
                            <div class="slider-triangle-under pull-left"></div>
                        </div>
                    </div>
                </div>
                <img alt="Slider 1" class="img-responsive" src="temp/sliderr-1.jpg" />
            </li>
            <li>
                <div class="slider-textbox clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="slider-bar pull-left">WELCOME TO Expedia PREMIUM</div>
                            <div class="slider-triangle pull-left"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="slider-bar-under pull-left">5 STAR SUPPORT</div>
                            <div class="slider-triangle-under pull-left"></div>
                        </div>
                    </div>
                </div>
                <img alt="Slider 1" class="img-responsive" src="temp/sliderr-2.jpg" />
            </li>
        </ul>
    </div>
    <div class="book-slider">
        <div class="container">
            <div class="row pos-center">
                <div class="reserve-form-area">
                    <form action="/search"  method="post" >
                        <ul class="clearfix">
                            {{--<li class="li-input">--}}
                                {{--<label>DESTINATION</label>--}}
                                {{--<input type="text" id="destinationName" name="destinationName" required />--}}
                            {{--</li>--}}
                            <li class="li-select">
                                <label>DESTINATION</label>
                                <select name="destinationName" class="pretty-select">
                                    <option selected="selected" value="New York City">New York City; New York
                                    </option>
                                    <option value="Chicago" >Chicago; Illinois
                                    </option>
                                    <option value="Houston">Houston; Texas
                                    </option>
                                    <option value="Dallas">Dallas; Texas
                                    </option>
                                    <option value="Seattle">Seattle; Washington
                                    </option>
                                    <option value="Detroit">Detroit; Michigan
                                    </option>
                                </select>
                            </li>
                            <li class="li-input">
                                <label>ARRIVAL</label>
                                <input type="text" id="dpd1" name="dpd1" data-date-format="yyyy/mm/dd" class="date-selector" placeholder="&#xf073;" required />
                            </li>
                            <li class="li-input">
                                <label>DEPARTURE</label>
                                <input type="text" id="dpd2" name="dpd2" data-date-format="yyyy/mm/dd" class="date-selector" placeholder="&#xf073;" required />
                            </li>
                            <li class="li-select">
                                <label>ROOMS</label>
                                <select name="rooms" class="pretty-select">
                                    <option selected="selected" value="1" >1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </li>
                            <li class="li-select">
                                <label>MIN RATING</label>
                                <select name="minStarRating" class="pretty-select">
                                    <option value="1" >1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option selected="selected" value="5">5</option>
                                </select>
                            </li>
                            {{--<li class="li-select">--}}
                                {{--<label>CHILDREN</label>--}}
                                {{--<select name="children" class="pretty-select">--}}
                                    {{--<option selected="selected" value="0" >0</option>--}}
                                    {{--<option value="1">1</option>--}}
                                    {{--<option value="2">2</option>--}}
                                    {{--<option value="3">3</option>--}}
                                    {{--<option value="4">4</option>--}}
                                    {{--<option value="5">5</option>--}}
                                {{--</select>--}}
                            {{--</li>--}}
                            <li>
                                <div class="button-style-1">
                                    <input type="submit" id="res-submits" value="SEARCH" />
                                </div>
                            </li>
                        </ul>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-book-slider">
        <div class="container">
            <div class="row pos-center">
                <ul>
                    <li><i class="fa fa-shopping-cart"></i> WOOCOMMERCE COMPATIBLE</li>
                    <li><i class="fa fa-globe"></i> LANGUAGE COMPATIBLE</li>
                    <li><i class="fa fa-coffee"></i> COFFEE & BREAKFAST FREE</li>
                    <li><i class="fa fa-windows"></i> FREE WI-FI ALL ROOM</li>
                </ul>
            </div>
        </div>
    </div>
</div>