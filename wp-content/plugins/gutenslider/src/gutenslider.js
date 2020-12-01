import simpleParallax from 'simple-parallax-js';

// jQuery( '.wp-block-eedee-block-gutenslider' ).each( function( idx, el ) {
// 	// jQuery( el ).imagesLoaded( function() {
// 	const slickSlider = jQuery( el ).find( '.slick-slider' );
// 	slickSlider.slick( {
// 		slide: '.wp-block-eedee-block-gutenslide',
// 		prevArrow: '<button type="button" class="slick-prev pull-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
// 		nextArrow: '<button type="button" class="slick-next pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
// 	} );
//
// 	// unset the preloading bg image
// 	jQuery( slickSlider ).on( 'beforeChange', function() {
// 		slickSlider.css( 'background-image', 'url( \'\' )' );
// 	} );
// } );

const gutensliders = document.querySelectorAll( '.wp-block-eedee-block-gutenslider' );
gutensliders.forEach( function( el ) {
	const slickSlider = el.querySelectorAll( '.slick-slider' );
	const btnPrev = jQuery( el ).find( '.eedee-gutenslider-prev' )[ 0 ];
	const btnNext = jQuery( el ).find( '.eedee-gutenslider-next' )[ 0 ];

	jQuery( slickSlider ).slick( {
		slide: '.wp-block-eedee-block-gutenslide',
		prevArrow: btnPrev,
		nextArrow: btnNext,
	} );

	// unset the preloading bg image
	jQuery( slickSlider ).on( 'beforeChange', function() {
		jQuery( slickSlider ).css( 'background-image', 'url( \'\' )' );
	} );

	jQuery( btnPrev ).on( 'click', () => {
		jQuery( slickSlider ).slick( 'slickPrev' );
	} );

	jQuery( btnNext ).on( 'click', () => {
		jQuery( slickSlider ).slick( 'slickNext' );
	} );
} );


/* Premium Code Stripped by Freemius */

