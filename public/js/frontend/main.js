(function($) {

/*------------------------------------------------------------------
[Table of contents s]

1. Preloader
2. Agent Work Grid
3. Agent Work Grid 2
4. Agent Testimonial Slider Version 2
5. Agent Client Slider
6. Agent Testimonial Slider
7. Agent Welcome Bottom Slider
8. Agent Post Slider
9. Agent Blog Post Slider
10. Agent V5 Banner Slide
11. Instagram Feed
12. Agent Menu Scroll To Top Init
13. Agent Magnific Pop UP
14. Agent Video Pop Up
15. Agent Revulation Slider
16. Mobile Menu
17. Agent Sticky Menu
18. Agent Map

-------------------------------------------------------------------*/
  jQuery.fn.is_exists = function(){return this.length>0;}

  $(window).on('load', function() {
  
	// $("#preloader").fadeOut(400);


/* =================================================================---------------------------------------
																	2. Agent Work Grid
---------------------------------------------==========================================================*/
 if($('.agent-work-grid').is_exists()) {
  var $container = $('.agent-work-grid'),
      colWidth = function () {
        var w = $container.width(), 
          columnNum = 1,
          columnWidth = 0;
        if (w > 1200) {
          columnNum  = 4;
        } else if (w > 900) {
          columnNum  = 4;
        } else if (w > 600) {
          columnNum  = 2;
        } else if (w > 450) {
          columnNum  = 2;
        } else if (w > 385) {
          columnNum  = 1;
        }
        columnWidth = Math.floor(w/columnNum);
        $container.find('.agent-single-grid-item').each(function() {
          var $item = $(this),
            multiplier_w = $item.attr('class').match(/agent-single-grid-item-w(\d)/),
            multiplier_h = $item.attr('class').match(/agent-single-grid-item-h(\d)/),
            width = multiplier_w ? columnWidth*multiplier_w[1] : columnWidth,
            height = multiplier_h ? columnWidth*multiplier_h[1]*0.4-12 : columnWidth*0.5;
          $item.css({
            width: width,
            //height: height
          });
        });
        return columnWidth;
      },
      isotope = function () {
        $container.isotope({
          resizable: false,
          itemSelector: '.agent-single-grid-item',
          masonry: {
            columnWidth: colWidth(),
            gutterWidth: 0
          }
        });
      };
    isotope();
    $(window).on('resize',isotope);
    var $optionSets = $('.agent-work-nav .option-set'),
        $optionLinks = $optionSets.find('li');
    $optionLinks.on('click',function(){
    var $this = $(this);
      var $optionSet = $this.parents('.option-set');
      $optionSet.find('.selected').removeClass('selected');
      $this.addClass('selected');

      // make option object dynamically, i.e. { filter: '.my-filter-class' }
      var options = {},
          key = $optionSet.attr('data-option-key'),
          value = $this.attr('data-option-value');
      // parse 'false' as false boolean
      value = value === 'false' ? false : value;
      options[ key ] = value;
      if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
        // changes in layout modes need extra logic
        changeLayoutMode( $this, options )
      } else {
        // creativewise, apply new options
        $container.isotope( options );
      }
      return false;
    }); 
} // End is_exists

/* =================================================================---------------------------------------
																		Agent Work Grid END
---------------------------------------------==========================================================*/


/* =================================================================---------------------------------------
																		3. Agent Work Grid 2
---------------------------------------------==========================================================*/

if($('.agent-work-grid-v2').is_exists()) {
  var $container = $('.agent-work-grid-v2'),
      colWidth = function () {
        var w = $container.width(), 
          columnNum = 1,
          columnWidth = 0;
        if (w > 1200) {
          columnNum  = 3;
        } else if (w > 900) {
          columnNum  = 3;
        } else if (w > 600) {
          columnNum  = 2;
        } else if (w > 450) {
          columnNum  = 2;
        } else if (w > 385) {
          columnNum  = 1;
        }
        columnWidth = Math.floor(w/columnNum);
        $container.find('.agent-single-grid-item').each(function() {
          var $item = $(this),
            multiplier_w = $item.attr('class').match(/agent-single-grid-item-w(\d)/),
            multiplier_h = $item.attr('class').match(/agent-single-grid-item-h(\d)/),
            width = multiplier_w ? columnWidth*multiplier_w[1] : columnWidth,
            height = multiplier_h ? columnWidth*multiplier_h[1]*0.4-12 : columnWidth*0.5;
          $item.css({
            width: width,
            //height: height
          });
        });
        return columnWidth;
      },
      isotope = function () {
        $container.isotope({
          resizable: false,
          itemSelector: '.agent-single-grid-item',
          masonry: {
            columnWidth: colWidth(),
            gutterWidth: 0
          }
        });
      };
    isotope();
    $(window).on('resize',isotope);
    var $optionSets = $('.agent-work-nav .option-set'),
        $optionLinks = $optionSets.find('li');
    $optionLinks.on('click',function(){
    var $this = $(this);
      var $optionSet = $this.parents('.option-set');
      $optionSet.find('.selected').removeClass('selected');
      $this.addClass('selected');

      // make option object dynamically, i.e. { filter: '.my-filter-class' }
      var options = {},
          key = $optionSet.attr('data-option-key'),
          value = $this.attr('data-option-value');
      // parse 'false' as false boolean
      value = value === 'false' ? false : value;
      options[ key ] = value;
      if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
        // changes in layout modes need extra logic
        changeLayoutMode( $this, options )
      } else {
        // creativewise, apply new options
        $container.isotope( options );
      }
      return false;
    }); 
} // End is_exists


/* =================================================================---------------------------------------
																		Agent Work Grid Version 2 END
---------------------------------------------==========================================================*/ 


}); //====================================================== end on.load event

$(document).ready(function(){
  
/* =================================================================---------------------------------------
                                1. Preloader  
---------------------------------------------==========================================================*/
  var counter = 0;
  var c = 0;
  var i = setInterval(function(){
      $(".loading-page .counter h1").html(c + "%");
      $(".loading-page .counter hr").css("width", c + "%");
    counter++;
    c++;
      
    if(counter == 101) {
        clearInterval(i);
        $("#preloader").delay(100).fadeOut(400);
    }
  }, 50);


	/* =================================================================---------------------------------------
																			4. Agent Testimonial Slider Version 2
	---------------------------------------------==========================================================*/

	if($('#agent-testimonial-slider-v-2').is_exists()) {
	  var owl1 = $("#agent-testimonial-slider-v-2");
	    owl1.owlCarousel({
	      nav: false,
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      center: true,
	      items:3,
	      loop:true,
	      touchDrag: true,
	      mouseDrag: true,
	      dots: false,
        responsive:{
        0:{
            items:1,
        },
        768:{
            items:1,
        },
        991:{
            items:3,
        },
        1000:{
            items:3,
        }
      }
	  });
	  $(".prev").on('click',function () {
	    owl1.trigger('prev.owl.carousel');
	  });

	  $(".next").on('click',function () {
	    owl1.trigger('next.owl.carousel');
	  });
	} // End is_exists


	/* =================================================================---------------------------------------
																			Agent Testimonial Slider Verion 2
	---------------------------------------------==========================================================*/

/* =================================================================---------------------------------------
																		 5. Agent Client Slider
---------------------------------------------==========================================================*/

if($('#agent-client-slider').is_exists()) {
  var owl2 = $("#agent-client-slider");
    owl2.owlCarousel({
      nav: false,
      slideSpeed : 300,
      paginationSpeed : 400,
      items:6,
      loop:true,
      touchDrag: true,
      mouseDrag: true,
      dots: false,
      responsive:{
      0:{
          items:1,
      },
      600:{
          items:3,
      },
      1000:{
          items:5,
      }
    }
  });
} // End is_exists

/* =================================================================---------------------------------------
																		Agent Client Slider END
---------------------------------------------==========================================================*/

/* =================================================================---------------------------------------
																		6. Agent Testimonial Slider
---------------------------------------------==========================================================*/

if($('#agent-testimonial-slider').is_exists()) {
  var owl3 = $("#agent-testimonial-slider");
    owl3.owlCarousel({
      nav: false,
      slideSpeed : 300,
      paginationSpeed : 400,
      center: true,
      items:3,
      loop:true,
      touchDrag: true,
      mouseDrag: true,
      dots: true,
     responsive:{
      0:{
          items:1,
      },
      600:{
          items:1,
      },
      768:{
          items:3,
      }
  }
  });
  $(".prev").on('click',function () {
    owl3.trigger('prev.owl.carousel');
  });

  $(".next").on('click',function () {
    owl3.trigger('next.owl.carousel');
  });
} // End is_exists

/* =================================================================---------------------------------------
																		Agent Testimonial Slider END
---------------------------------------------==========================================================*/

/* =================================================================---------------------------------------
																		7. Agent Welcome Bottom Slider
---------------------------------------------==========================================================*/

if($('#agent-welcome-botton-slider').is_exists()) {
  var owl4 = $("#agent-welcome-botton-slider");
    owl4.owlCarousel({
      nav: false,
      slideSpeed : 300,
      paginationSpeed : 400,
      items:4,
      loop:true,
      touchDrag: true,
      mouseDrag: true,
      dots: false,
       responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        991:{
            items:3,
        },
        1000:{
            items:4,
        }
    }
  });
  $(".prev").on('click',function () {
    owl4.trigger('prev.owl.carousel');
  });

  $(".next").on('click',function () {
    owl4.trigger('next.owl.carousel');
  });
} // End is_exists

/* =================================================================---------------------------------------
																		Agent Welcome Bottom Slider END
---------------------------------------------==========================================================*/


/* =================================================================---------------------------------------
																		8. Agent Post Slider
---------------------------------------------==========================================================*/

if($('#agent-post-slider').is_exists()) {
  var owl5 = $("#agent-post-slider");
    owl5.owlCarousel({
      nav: false,
      slideSpeed : 300,
      paginationSpeed : 400,
      items:1,
      loop:true,
      touchDrag: true,
      mouseDrag: true,
      dots: false,
      lazyLoad: true
  });
  $(".prev").on('click',function () {
    owl5.trigger('prev.owl.carousel');
  });

  $(".next").on('click',function () {
    owl5.trigger('next.owl.carousel');
  });
} // End is_exists

/* =================================================================---------------------------------------
																		Agent Post Slider END
---------------------------------------------==========================================================*/

/* =================================================================---------------------------------------
																		9. Agent Blog Post Slider
---------------------------------------------==========================================================*/

if($('#agent-blog-post-slider').is_exists()) {
  var owl6 = $("#agent-blog-post-slider");
    owl6.owlCarousel({
      nav: false,
      slideSpeed : 300,
      paginationSpeed : 400,
      items:3,
      loop:true,
      touchDrag: true,
      mouseDrag: true,
      dots: false,
      lazyLoad: true,
      responsive:{
          0:{
              items:1,
          },
          768:{
              items:2,
          },
          991:{
              items:3,
          },
          1000:{
              items:3,
          }
      }
  });
  $(".prev").on('click',function () {
    owl6.trigger('prev.owl.carousel');
  });

  $(".next").on('click',function () {
    owl6.trigger('next.owl.carousel');
  });
} // End is_exists

/* =================================================================---------------------------------------
																		Agent Blog Post Slider END
---------------------------------------------==========================================================*/



  /* =================================================================---------------------------------------
                                      10. Agent V5 Banner Slide
  ---------------------------------------------==========================================================*/

  if($('#agent-banner-carousel').is_exists()) {
    var owl7 = $("#agent-banner-carousel");
      owl7.owlCarousel({
        nav: false,
        slideSpeed : 300,
        paginationSpeed : 400,
        center: true,
        items:1,
        loop:true,
        touchDrag: true,
        mouseDrag: true,
        dots: true,
    });
  } // End is_exists





/* =================================================================---------------------------------------
																		11. Instagram Feed
---------------------------------------------==========================================================*/


if ($('.userFeed').is_exists()) {
	$.fn.spectragram.accessData = {
	  accessToken: '1764162550.ba4c844.679392a432894982bf6a31ec20d8acb0',
	  clientID: '289a98508b934dd49a68144b79209813'
	};

	$('.userFeed').spectragram('getUserFeed', {
	  query: 'natgeo',
	  size: 'small',
	  max: 6
	});
}

/* =================================================================---------------------------------------
																		Instagram Feed END
---------------------------------------------==========================================================*/

/* =================================================================---------------------------------------
																		12. Agent Menu Scroll To Top Init
---------------------------------------------==========================================================*/


if($('.agent-main-menu-area, .agent-main-menu ul li').is_exists()) {
  $( '.agent-main-menu-area, .agent-main-menu ul li' ).on('click', 'a', function(e){
    var href = $(this).attr("href"),
        hrefFirst = href[0];

    if(hrefFirst === '#' && $(href).offset()){
      var offsetTop = href === "#" ? 0 : $(href).offset().top - 0;
      $('html, body').stop().animate({ 
          scrollTop: offsetTop,
      }, 500, "easeInOutCirc");
      e.preventDefault();
    }

  });
} // End is_exists


/* =================================================================---------------------------------------
																		Agent Menu Scroll To Top Init END
---------------------------------------------==========================================================*/

/* =================================================================---------------------------------------
																		13. Agent Magnific Pop UP
---------------------------------------------==========================================================*/

var agentgallery = $('.agent-work-main-wraper');

if(agentgallery.is_exists()) {
  
  agentgallery.magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          titleSrc: function(item) {
            return item.el.attr;
          }
        }
      });
} // End is_exists

/* =================================================================---------------------------------------
																		Agent Magnific Pop UP END
---------------------------------------------==========================================================*/


/* =================================================================---------------------------------------
																		14. Agent Video Pop Up
---------------------------------------------==========================================================*/

if ($('.agent-video-play-btn').is_exists()) {
	$('.agent-video-play-btn').magnificPopup({
	disableOn: 700,
	type: 'iframe',
	mainClass: 'mfp-fade',
	removalDelay: 160,
	preloader: false,
	fixedContentPos: false
	});
}

/* =================================================================---------------------------------------
																		Agent Video Pop Up END
---------------------------------------------==========================================================*/

/* =================================================================---------------------------------------
																		15. Agent Revulation Slider
---------------------------------------------==========================================================*/

if($('#rev_slider_1').is_exists()) {
  jQuery('#rev_slider_1').show().revolution({
      sliderLayout: 'fullscreen',

      navigation: {

          arrows: {
              enable: true,
              style: "hesperiden",
              hide_onleave: false
          },

          bullets: {
              enable: true,
              style: "hesperiden",
              hide_onleave: false,
              h_align: "center",
              v_align: "bottom",
              h_offset: 0,
              v_offset: 20,
              space: 5

          }
      }
  });
} // End is_exists

/* =================================================================---------------------------------------
																		 Agent Revulation Slider Init END
---------------------------------------------==========================================================*/


/* =================================================================---------------------------------------
                                    16. Mobile Menu
---------------------------------------------==========================================================*/
if($('#dl-menu').is_exists()) {
  $( '#dl-menu' ).dlmenu();
}

/* =================================================================---------------------------------------
                                    17. Contact Form
---------------------------------------------==========================================================*/
$('#emailform').on('submit', function(e){
  e.preventDefault();


  var name = $('#form-name-px'),
      email = $('#form-email-px'),
      massage = $('#form-massage-px'),
      name_val = name.val(),
      email_val = email.val(),
      validate = false,
      self = $(this);

  if(self.find('.message-update')){
    self.find('.message-update').fadeOut("normal", function() {
        $(this).remove();
    });
  }

  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email_val);
  }

  name.removeClass('error');
  massage.removeClass('error');
  email.removeClass('error');


  if(name.val() === ""){
    validate = true;
    name.addClass('error');
  }

  if(massage.val() === ""){
    validate = true;
    massage.addClass('error');
  }

  if(email.val() === ""){
    validate = true;
    email.addClass('error');
  }

  if(!validateEmail(email.val())){
    validate = true;
    email.addClass('error');
  }

  if(validate === false){

    $.ajax({
      method: "POST",
      url: $(this).attr('action'),
      data: { 
        name: $('#form-name-px').val(), 
        email: $('#form-email-px').val(),
        message: $('#form-massage-px').val()
      },
      success: function(response){
        var res = JSON.parse(response);
        console.log(res);
        if(res.email_success){
          $('<div class="message-update alert alert-success">'+ res.email_success +'</div>').appendTo( self ).hide().fadeIn();
          name.val('');
          email.val('');
          massage.val('');
        }
        if(res.email_error){
          $('<div class="message-update alert alert-danger">'+ res.email_error +'</div>').appendTo( self ).hide().fadeIn();
        }

        
      }
    });
  }

});

/* =================================================================---------------------------------------
                                    18. Newsletter Subscription
---------------------------------------------==========================================================*/
  if($('#mc-form').is_exists()) {
    $('#mc-form').ajaxChimp({
        url: '//pixiefy.us13.list-manage.com/subscribe/post?u=1c19cb3fd3c3c6c56177c50ea&amp;id=967a07b6cc'
    });
  } //End if exist

/* =================================================================---------------------------------------
                                    19. Equal Height
---------------------------------------------==========================================================*/
  var maxHeight = 0;

  $('.agent-welcome-bottom-single-wraper').each(function(){
     var thisH = $(this).height();
     if (thisH > maxHeight) { maxHeight = thisH; }
  });

  $('.agent-welcome-bottom-single-wraper').height(maxHeight);



});



/* =================================================================---------------------------------------
																		17. Agent Sticky Menu
---------------------------------------------==========================================================*/

$(window).on('scroll', function(){
  if ($(window).scrollTop() > 50) {
      $('#home-section').addClass('sticky-menu');
  } else {
      $('#home-section').removeClass('sticky-menu');
  }
}); // END ON Scroll

/* =================================================================---------------------------------------
																		Agent Sticky Menu END
---------------------------------------------==========================================================*/


/* =================================================================---------------------------------------
																		18. Agent Map
---------------------------------------------==========================================================*/
if($('#map').is_exists()) {
  google.maps.event.addDomListener(window, 'load', init);
} // End is_exists
// When the window has finished loading create our google map below

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
                  zoom: 11,
                  scrollwheel: false,
                  navigationControl: false,
                  mapTypeControl: true,
                  scaleControl: false,
                  draggable: true,
                  disableDefaultUI: true,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(54.6877546,25.2730256), // New York

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#E0A516"
            },
            {
                "visibility": "on"
            }
        ]
    }
]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(54.6877546, 25.2730256),
        map: map,
        title: 'Snazzy!'
    });
}

/* =================================================================---------------------------------------
																			Agent Map END 
---------------------------------------------==========================================================*/



})(jQuery);