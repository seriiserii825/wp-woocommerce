<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Enqueue scripts and styles.
 */
function bs_shop_scripts() {
	wp_enqueue_style( 'bs-shop-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bs-bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );
	wp_enqueue_style( 'bs-flexslider-style', get_template_directory_uri().'/assets/css/flexslider.css' );
	wp_enqueue_style( 'bs-my-style', get_template_directory_uri().'/assets/css/my.css' );

	wp_enqueue_script( 'bs-bootstrap-3.1.1.min-js', get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bs-simpleCart.min-js', get_template_directory_uri() . '/assets/js/simpleCart.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bs-jquery.flexisel-js', get_template_directory_uri() . '/assets/js/jquery.flexisel.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bs-responsiveslides.min-js', get_template_directory_uri() . '/assets/js/responsiveslides.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bs-my-js', get_template_directory_uri() . '/assets/js/my.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'bs-shop-navigation-js', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bs-shop-skip-link-focus-fix-js', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bs_shop_scripts' );
