 /*
 * Custom scripts
 * Description: Custom scripts for fullframe
 */

jQuery(document).ready(function() {
	var jQueryheader_search = jQuery( '#header-toggle' );
	jQueryheader_search.click( function() {

		var jQueryform_search = jQuery("div").find( '#masthead' );	
			
		if ( jQueryform_search.hasClass( 'displaynone' ) ) {
			jQueryform_search.removeClass( 'displaynone' ).addClass( 'displayblock' ).animate( { opacity : 1 }, 300 );
		} else {
			jQueryform_search.removeClass( 'displayblock' ).addClass( 'displaynone' ).animate( { opacity : 0 }, 300 );		
		}
	});

	//Fit vids
	if ( jQuery.isFunction( jQuery.fn.fitVids ) ) {
		jQuery('.hentry, .widget').fitVids();
	}

	//sidr
	if ( jQuery.isFunction( jQuery.fn.sidr ) ) {
		jQuery('#mobile-header-left-menu').sidr({
		   name: 'mobile-header-left-nav',
		   side: 'left' // By default
		});
		jQuery('#mobile-secondary-menu').sidr({
		   name: 'mobile-secondary-nav',
		   side: 'left' // By default
		});

		var sub_menu = jQuery('.sidr ul.sub-menu').prev();

		sub_menu.click(function(e) {
			e.preventDefault();
	        jQuery(this).next().slideToggle();
	        jQuery(this).toggleClass('is-open');
	    });
	}

	//Sticky Header
    jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 40) {
			jQuery('#fixed-header').addClass("is-sticky");
		} else {
			jQuery('#fixed-header').removeClass("is-sticky");
		}
	});


});
