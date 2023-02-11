<?php

if( site_url() == 'http://localhost/LearnWithHasinHayder/3.5_Theme_Bootstraping' ) {
	define( 'VERSION', time() );
} else {
	define( 'VERSION', wp_get_theme()->get('Version') );
}

function alpha99_bootstrapping()
{
	load_theme_textdomain( 'alpha99' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( "title-tag" );
	$alpha99_custom_header_details = array(
		'header-text' => true,
		'default-text-color' => '#fff',
		'width'  => 1200,
		'height' => 600,
	);
	add_theme_support( 'custom-header', $alpha99_custom_header_details );
	$alpha_custom_logo_details = array(
		'width'  => '100',
		'height' => '100',
	);
	add_theme_support( 'custom-logo', $alpha_custom_logo_details );
	register_nav_menu( 'primary', __( 'Header Menu', 'alpha99' ) );
	register_nav_menu( 'secondary', __( 'Footer Menu', 'alpha99' ) );
}
add_action( 'after_setup_theme', 'alpha99_bootstrapping' );

function alpha99_assets() {
	wp_enqueue_style( 'alpha99', get_stylesheet_uri(), null, VERSION );
	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'featherlight-css', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css' );

	wp_enqueue_script( 'featherlight-js', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js', array( 'jquery' ), '1.7.14', true );
	wp_enqueue_script( 'alpha99-main', get_theme_file_uri( '/assets/js/script.js' ) , array( 'jquery', 'featherlight-js' ), VERSION, true );
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
add_filter( "the_excerpt", "alpha99_the_excerpt" );

function alpha99_post_title( $title ) {
	if (!post_password_required()) {
		return "%s";
	} else {
		return "Locked: %s";
	}
}
add_filter( 'protected_title_format', 'alpha99_post_title' );

function alpha99_menu_item_class( $classes, $item ) {
	$classes[] = 'list-inline-item';
	return $classes;
}
add_filter( 'nav_menu_css_class', 'alpha99_menu_item_class', 10, 2);

function alpha99_hero_background_image_banner() {
	if ( is_home() || is_front_page() ) :
	$alpha99_featured_image = get_header_image(); ?>
	<style>
		.header {
			background: url(<?php echo $alpha99_featured_image; ?>) center center;
			background-size: cover;
			color: #<?php echo get_header_textcolor(); ?>;
		}
		.header a {
			color: #<?php echo get_header_textcolor(); ?>;
		}
		<?php if( ! display_header_text() ) :?>
		.header .col-md-12:first-child {
			display: none;
		}
		.header .col-md-12:last-child {
			padding-top: 50px;
		}
		<?php endif; ?>
	</style>
	<?php else :
	$alpha99_featured_image = get_the_post_thumbnail_url( null, "large" ); ?>
	<style>
		.header-bg {
			background: url(<?php echo $alpha99_featured_image; ?>) center center;
			background-size: cover;
		}
	</style>
	<?php endif;
}
add_action( 'wp_head', 'alpha99_hero_background_image_banner', 11 );
