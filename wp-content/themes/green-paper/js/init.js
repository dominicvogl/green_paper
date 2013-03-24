// global namespace
var blog = {};

(function( $, w ){

    if($('.slider').length>0){

        console.log('jQuery loaded successfully!');

        blog.slider = $('.slider').flexslider({
            animation: "slide",
            controlNav: true,
            directionNav: true,
            prevText: "Previous",
            nextText: "Next",
            slideshow: true,
            slideshowSpeed: 5000,
            animationSpeed: 800,
            smoothHeight: false,
            useCSS: true,
            touch: true,
            namespace: "slide-",
            randomize: true
        });
    }
        
})( jQuery.noConflict(), window);
