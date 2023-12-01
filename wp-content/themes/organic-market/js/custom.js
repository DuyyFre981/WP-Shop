jQuery(function($){
  "use strict";
  jQuery('.main-menu-navigation > ul').superfish({
    delay:       0,                            
    animation:   {opacity:'show',height:'show'},  
    speed:       'fast'                        
  });
});

// scroll
jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 0) {
      jQuery('#scroll-top').fadeIn();
    } else {
      jQuery('#scroll-top').fadeOut();
    }
  });
  jQuery(window).on("scroll", function () {
    document.getElementById("scroll-top").style.display = "block";
  });
  jQuery('#scroll-top').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
  });

  organic_market_MobileMenuInit();
});

(function( $ ) {

  $(window).scroll(function(){
    var sticky = $('.sticky-header'),
    scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed-header');
    else sticky.removeClass('fixed-header');
  });

  $(window).scroll(function(){
    var sticky = $('.logo-sticky-header'),
    scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('header-fixed');
    else sticky.removeClass('header-fixed');
  });

})( jQuery );

// preloader
jQuery(function($){
  setTimeout(function(){
    $("#loader-wrapper").delay(1000).fadeOut("slow");
  });
});

jQuery(document).ready(function(){
  jQuery(".product-cat").hide();
  jQuery("button.product-btn").click(function(){
    jQuery(".product-cat").toggle();
  });
});

function organic_market_MobileMenuInit() {

  /* First and last elements in the menu */
  var organic_market_firstTab = jQuery('.main-menu-navigation ul:first li:first a');
  var organic_market_lastTab  = jQuery('a.closebtn'); /* Cancel button will always be last */

  jQuery(".mobiletoggle").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').addClass("noscroll");
    organic_market_firstTab.focus();
  });

  jQuery("a.closebtn").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').removeClass("noscroll");
    jQuery(".mobiletoggle").focus();
  });

  /* Redirect last tab to first input */
  organic_market_lastTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('noscroll'))
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      organic_market_firstTab.focus();
    }
  });

  /* Redirect first shift+tab to last input*/
  organic_market_firstTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('noscroll'))
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      organic_market_lastTab.focus();
    }
  });

  /* Allow escape key to close menu */
  jQuery('.sidebar').on('keyup', function(e){
    if (jQuery('body').hasClass('noscroll'))
    if (e.keyCode === 27 ) {
      jQuery('body').removeClass('noscroll');
      organic_market_lastTab.focus();
    };
  });
}

(function( $ ) {
  jQuery(document).ready(function() {
    jQuery('#selling').slick({
      rows: 2,
      dots: false,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="fas fa-arrow-right"></i></button>',
      prevArrow: '<button class="slick-prev slick-arrow" aria-label="Prev" type="button"><i class="fas fa-arrow-left"></i></button>',
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 1008,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 720,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    })
  })
})( jQuery );