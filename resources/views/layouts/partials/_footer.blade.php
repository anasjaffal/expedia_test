<!-- JS FILES -->
<script src="{{asset('/js/vendor/jquery-1.11.1.min')}}"></script>
<script src="{{asset('/js/vendor/bootstrap.min')}}"></script>
<script src="{{asset('/js/retina-1.1.0.min')}}"></script>
<script src="{{asset('/js/jquery.flexslider-min')}}"></script>
<script src="{{asset('/js/superfish.pack.1.4.1')}}"></script>
<script src="{{asset('/js/jquery.slicknav.min')}}"></script>
<script src="{{asset('/js/bootstrap-datepicker')}}"></script>
<script src="{{asset('/js/selectordie.min')}}"></script>
<script src="{{asset('/js/jquery.parallax-1.1.3')}}"></script>
<script src="{{asset('/js/jquery.prettyPhoto')}}"></script>
<script src="{{asset('/js/supersized.3.2.7.min')}}"></script>
<script src="{{asset('/js/supersized.shutter.min')}}"></script>
<script src="{{asset('/js/main')}}"></script>
<script type="text/javascript">
    jQuery(function($){
        $.supersized({
            slideshow			:1,			// Slideshow on/off
            autoplay			:1,			// Slideshow starts playing automatically
            slide_interval		:4000,		// Length between transitions
            transition			:1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed	:1000,		// Speed of transition
            pause_hover			:0,			// Pause slideshow on hover
            performance			:1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
            image_protect		:1,			// Disables image dragging and right click with Javascript
            slides				:[			// Slideshow Images
                {image : 'temp/sli-2.jpg'},
                {image : 'temp/sli-1.jpg'}
            ]
        });
    });
</script>