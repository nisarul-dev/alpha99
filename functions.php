<?php

function alpha99_bootstrapping() {
	load_theme_textdomain( 'alpha99' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( "title-tag" );
}
add_action( 'wp_enqueue_scripts', 'alpha99_bootstrapping' );

