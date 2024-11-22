<?php

/**
 * Register a custom post type called "service".
 *
 * @see get_post_type_labels() for label keys.
 */
function softuni_register_service_cpt() {
	$labels = array(
		'name'                  => _x( 'Service Items', 'Post type general name', 'softuni' ),
		'singular_name'         => _x( 'Service', 'Post type singular name', 'softuni' ),
		'menu_name'             => _x( 'Service Items', 'Admin Menu text', 'softuni' ),
		'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'softuni' ),
		'add_new'               => __( 'Add New', 'softuni' ),
		'add_new_item'          => __( 'Add New Service', 'softuni' ),
		'new_item'              => __( 'New Service', 'softuni' ),
		'edit_item'             => __( 'Edit Service', 'softuni' ),
		'view_item'             => __( 'View Service', 'softuni' ),
		'all_items'             => __( 'All Service Items', 'softuni' ),
		'search_items'          => __( 'Search Service Items', 'softuni' ),
		'parent_item_colon'     => __( 'Parent Service Items:', 'softuni' ),
		'not_found'             => __( 'No Service Items found.', 'softuni' ),
		'not_found_in_trash'    => __( 'No Service Items found in Trash.', 'softuni' ),
		'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'softuni' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'softuni' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'softuni' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'softuni' ),
		'archives'              => _x( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'softuni' ),
		'insert_into_item'      => _x( 'Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'softuni' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'softuni' ),
		'filter_items_list'     => _x( 'Filter Service Items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'softuni' ),
		'items_list_navigation' => _x( 'Service Items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'softuni' ),
		'items_list'            => _x( 'Service Items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'softuni' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
          'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'service', $args );
}

add_action( 'init', 'softuni_register_service_cpt' );


/**
 * Register a custom taxonomy category called "service category".
 *
 * @return void
 */
function softuni_register_service_category_taxonomy() {

     $args = array();
     $labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'softuni' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'softuni' ),
		'search_items'      => __( 'Search Categories', 'softuni' ),
		'all_items'         => __( 'All Categories', 'softuni' ),
		'parent_item'       => __( 'Parent Category', 'softuni' ),
		'parent_item_colon' => __( 'Parent Category:', 'softuni' ),
		'edit_item'         => __( 'Edit Category', 'softuni' ),
		'update_item'       => __( 'Update Category', 'softuni' ),
		'add_new_item'      => __( 'Add New Category', 'softuni' ),
		'new_item_name'     => __( 'New Category Name', 'softuni' ),
		'menu_name'         => __( 'Category', 'softuni' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
          'show_in_rest'       => true,
		'rewrite'           => array( 'slug' => 'category' ),
	);

     register_taxonomy( 'service-category', 'service', $args );

}

add_action( 'init', 'softuni_register_service_category_taxonomy' );


/**
 * Register meta box(es).
 */
function service_register_meta_boxes() {
	add_meta_box( 'service', 
	__( 'Service', 'softuni' ), 
	'softuni_service_callback', 
	'post' 
	);
}
add_action( 'add_meta_boxes', 'service_register_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function softuni_service_callback( $post ) {
	// Display code/markup goes here. Don't forget to include nonces!
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function wpdocs_save_meta_box( $post_id ) {
	// Save logic goes here. Don't forget to include nonce checks!
}
add_action( 'save_post', 'wpdocs_save_meta_box' );


?>