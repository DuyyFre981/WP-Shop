jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},
		speed:'fast'
	});
});

function digital_advertising_menu_open() {
	jQuery(".side-menu").addClass('open');
}
function digital_advertising_menu_close() {
	jQuery(".side-menu").removeClass('open');
}

function digital_advertising_search_show() {
	jQuery(".search-outer").addClass('show');
	jQuery(".search-outer").fadeIn();
}
function digital_advertising_search_hide() {
	jQuery(".search-outer").removeClass('show');
	jQuery(".search-outer").fadeOut();
}

function digital_advertising_social_show() {
	if (jQuery(".social-icon").hasClass("opened")) {
	  jQuery(".social-icon").removeClass("opened");
	} else {
	  jQuery(".social-icon").addClass("opened");
	}
}

(function( $ ) {

	$(window).scroll(function(){
		var sticky = $('.sticky-header'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-header px-lg-3 px-2');
		else sticky.removeClass('fixed-header px-lg-3 px-2');
	});

	// Back to top
	jQuery(document).ready(function () {
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 0) {
      	jQuery('.scrollup').fadeIn();
      } else {
        jQuery('.scrollup').fadeOut();
      }
    });
    jQuery('.scrollup').click(function () {
      jQuery("html, body").animate({
        scrollTop: 0
      }, 600);
      return false;
    });
	});

	// Window load function
	window.addEventListener('load', (event) => {
		jQuery(".preloader").delay(2000).fadeOut("slow");
	});

})( jQuery );

( function( window, document ) {
	function digital_advertising_keepFocusInMenu() {
		document.addEventListener( 'keydown', function( e ) {
			const digital_advertising_nav = document.querySelector( '.side-menu' );

			if ( ! digital_advertising_nav || ! digital_advertising_nav.classList.contains( 'open' ) ) {
				return;
			}

			const elements = [...digital_advertising_nav.querySelectorAll( 'input, a, button' )],
				digital_advertising_lastEl = elements[ elements.length - 1 ],
				digital_advertising_firstEl = elements[0],
				digital_advertising_activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( ! shiftKey && tabKey && digital_advertising_lastEl === digital_advertising_activeEl ) {
				e.preventDefault();
				digital_advertising_firstEl.focus();
			}

			if ( shiftKey && tabKey && digital_advertising_firstEl === digital_advertising_activeEl ) {
				e.preventDefault();
				digital_advertising_lastEl.focus();
			}
		} );
	}

	
	
	function digital_advertising_keepfocus_search() {
		document.addEventListener( 'keydown', function( e ) {
			const digital_advertising_search = document.querySelector( '.search-outer' );

			if ( ! digital_advertising_search || ! digital_advertising_search.classList.contains( 'show' ) ) {
				return;
			}

			const elements = [...digital_advertising_search.querySelectorAll( 'input, a, button' )],
				digital_advertising_lastEl = elements[ elements.length - 1 ],
				digital_advertising_firstEl = elements[0],
				digital_advertising_activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( ! shiftKey && tabKey && digital_advertising_lastEl === digital_advertising_activeEl ) {
				e.preventDefault();
				digital_advertising_firstEl.focus();
			}

			if ( shiftKey && tabKey && digital_advertising_firstEl === digital_advertising_activeEl ) {
				e.preventDefault();
				digital_advertising_lastEl.focus();
			}
		} );
	}

	digital_advertising_keepFocusInMenu();

	digital_advertising_keepfocus_search();
} )( window, document );
