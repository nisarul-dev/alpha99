<?php

function alpha99_bootstrapping()
{
	load_theme_textdomain( 'alpha99' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( "title-tag" );
}
add_action( 'after_setup_theme', 'alpha99_bootstrapping' );

