jQuery(document).ready(function () {
    "use strict";


    if (jQuery().owlCarousel) {

        jQuery("#owl-services").owlCarousel({
            navigation: true,
            // Show next and prev buttons
            slideSpeed: 1000,
			autoPlay : true,
            paginationSpeed: 2000,
            singleItem: true,
            pagination: false,
            navigationText: ['<i class="fa fa-angle-left fa-3x"></i>', '<i class="fa fa-angle-right fa-3x"></i>'],
            responsive: true,
            responsiveRefreshRate: 200,
            responsiveBaseWidth: window,
			transitionStyle: "backSlide",
            // "singleItem:true" is a shortcut for:
            // items : 1, 
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
        });
        jQuery("#owl-services-quotes").owlCarousel({
            navigation: false,
            // Show next and prev buttons
            slideSpeed: 1000,
			autoPlay : true,
            paginationSpeed: 2000,
            singleItem: true,
            pagination: false,
            responsive: true,
            responsiveRefreshRate: 200,
            responsiveBaseWidth: window,
			transitionStyle: "backSlide",
            // "singleItem:true" is a shortcut for:
            // items : 1, 
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
        });
		
	 jQuery("#owl-gallery-home").owlCarousel({
            autoPlay: 3000,
            //Set AutoPlay to 3 seconds
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
		  	navigation: true,
		    navigationText: ['<i class="fa fa-angle-left fa-3x"></i>', '<i class="fa fa-angle-right fa-3x"></i>'],
            pagination: false

	  });
		
    }

		$('#carousel').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: true,
		itemWidth: 210,
		itemMargin: 5,
		asNavFor: '#slider'
	  });

	  $('#slider').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: true,
		sync: "#carousel"
	  });
	
	
	
});