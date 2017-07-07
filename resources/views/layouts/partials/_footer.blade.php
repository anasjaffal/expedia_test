<!-- JS FILES -->
<script src="js/vendor/jquery-1.11.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/2.1.2/retina.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/superfish.pack.1.4.1.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/selectordie.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/supersized.3.2.7.min.js"></script>
<script src="js/supersized.shutter.min.js"></script>
<script src="js/main.js"></script>
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