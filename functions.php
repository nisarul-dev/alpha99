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

function alpha99_sidebar() {
	register_sidebar( array(
		'name'          => __( 'Single Post Sidebar', 'alpha99' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Right Sidebar', 'alpha99' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class-"widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Left Area', 'alpha99' ),
		'id' => 'footer-left',
		'description' => __( 'Footer left area text', 'alpha99' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class-"widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Right Area', 'alpha99' ),
		'id' => 'footer-right',
		'description' => __( 'Footer Right area text', 'alpha99' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class-"widget-title">',
		'after_title' => '</h2>',
	) );
}
add_action( "widgets_init", "alpha99_sidebar" );

function alpha99_the_excerpt( $excerpt ) {
	if (!post_password_required()) {
		return $excerpt;
	} else {
		return get_the_password_form();
	}
}
add_action( "the_excerpt", "alpha99_the_excerpt" );

function alpha99_post_title( $title ) {
	if (!post_password_required()) {
		return "%s";
	} else {
		return "Locked: %s";
	}
}
add_filter( 'protected_title_format', 'alpha99_post_title' );