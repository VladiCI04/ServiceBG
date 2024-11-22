<?php

add_theme_support( 'tittle-tag' );
add_theme_support( 'post-thumbnails' );
add_post_type_support ( 'excerpt', array() );

add_action( 'wp_enqueue__scripts', 'servicebg_enqueue_assets' );
function servicebg_enqueue_assets() {
     //wp_enqueue_style( 'servicebg', get_stylesheet_directory_uri() . '/style.css' );
}

function servicebg_desplay_latest_post($number_of_posts = 3) {
     include 'latest-posts.php';
}

?>