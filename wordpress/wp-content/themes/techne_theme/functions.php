<?php

/*************************
			HIDE WP NAVBAR
*************************/

show_admin_bar( false );

/*************************
			ENQUE CSS/JS
*************************/

function techne_script_enqueue() {
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/master.css', array(), '1.0.0', 'all');
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
	wp_enqueue_script( 'scrollmagic-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array(), true);
	wp_enqueue_script( 'indicator-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/debug.addIndicators.js', array(), true);
	wp_enqueue_script( 'gsap', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.2/TweenMax.min.js', array(), true);
	wp_enqueue_script( 'scrollmagic-animation', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), true);
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'techne_script_enqueue');

/*************************
				PAGE TITLE
*************************/

function assignPageTitle(){
    global $wp_query;
    return "Techne";
}

add_filter('wp_title', 'assignPageTitle');

$args = array(
	'width'         => 980,
	'height'        => 60,
	'default-image' => get_template_directory_uri() . '/img/logo.jpg',
);

add_theme_support( 'custom-header', $args );
