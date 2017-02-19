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
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.1.js', array(), null, true);
	wp_enqueue_script( 'scrollmagic-js', get_template_directory_uri() . '/js/scrollMagic.min.js', array(), true);
	wp_enqueue_script( 'gsap-timeline',  get_template_directory_uri() . '/js/timelineMax.min.js', array(), true);
	wp_enqueue_script( 'gsap-tweenMax',  get_template_directory_uri() . '/js/tweenMax.min.js', array(), true);
	wp_enqueue_script( 'scrollmagic-animation', get_template_directory_uri() . '/js/animation.gsap.min.js', array(), true);
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
