<?php

function alpha99_bootstrapping()
{
	load_theme_textdomain( 'alpha99' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( "title-tag" );
}
add_action( 'after_setup_theme', 'alpha99_bootstrapping' );

function alpha99_assets() {
	wp_enqueue_style( 'alpha99', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'alpha99_assets' );