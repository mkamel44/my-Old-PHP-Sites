(function ($) {

  "use strict";

//Transparency
    // ABOUT SLIDER
    $('body').vegas({
        slides: [
            { src: 'images/slide-image01.jpg' },
			{ src: 'images/slide-image02.jpg' },
			{ src: 'images/slide-image03.jpg' },
            { src: 'images/slide-image04.jpg' }
        ],
        timer: false,
        transition: [ 'zoomOut', ]
    });

})(jQuery);
