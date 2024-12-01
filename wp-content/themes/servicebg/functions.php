<?php


add_theme_support( 'tittle-tag' );
add_theme_support( 'post-thumbnails' );
add_post_type_support ( 'excerpt', array() );

add_action( 'wp_enqueue__scripts', 'servicebg_enqueue_assets' );
function servicebg_enqueue_assets() {
     //wp_enqueue_style( 'servicebg', get_stylesheet_directory_uri() . '/style.css' );
}

function servicebg_display_latest_post($number_of_posts = 3) {
     include 'latest-posts.php';
}

/**
* Register navigation menus
*
* @return void
*/
function softuni_register_nav_menus() {
	// register_nav_menus(
	// 	array(
	// 		'primary_menu'          => __( 'Primary Menu', 'textdomain' ),
	// 		'primary_menu_mobile'   => __( 'Primary Menu Mobile', 'textdomain' ),
	// 		'footer_menu_site_info' => __( 'Footer Menu Site Info', 'textdomain' ),
	// 	)
	// );

    register_nav_menu( 'primary', 'Primary Menu' );
}

add_action( 'after_setup_theme', 'softuni_register_nav_menus', 0 );


?>