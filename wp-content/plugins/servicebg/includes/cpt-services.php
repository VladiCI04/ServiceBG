<?php

/**
 * Register a custom post type called "service".
 *
 * @see get_post_type_labels() for label keys.
 */
function servicebg_register_service_cpt() {
	$labels = array(
		'name'                  => _x( 'Service Items', 'Post type general name', 'servicebg' ),
		'singular_name'         => _x( 'Service', 'Post type singular name', 'servicebg' ),
		'menu_name'             => _x( 'Service Items', 'Admin Menu text', 'servicebg' ),
		'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'servicebg' ),
		'add_new'               => __( 'Add New', 'servicebg' ),
		'add_new_item'          => __( 'Add New Service', 'servicebg' ),
		'new_item'              => __( 'New Service', 'servicebg' ),
		'edit_item'             => __( 'Edit Service', 'servicebg' ),
		'view_item'             => __( 'View Service', 'servicebg' ),
		'all_items'             => __( 'All Service Items', 'servicebg' ),
		'search_items'          => __( 'Search Service Items', 'servicebg' ),
		'parent_item_colon'     => __( 'Parent Service Items:', 'servicebg' ),
		'not_found'             => __( 'No Service Items found.', 'servicebg' ),
		'not_found_in_trash'    => __( 'No Service Items found in Trash.', 'servicebg' ),
		'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'servicebg' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'servicebg' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'servicebg' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'servicebg' ),
		'archives'              => _x( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'servicebg' ),
		'insert_into_item'      => _x( 'Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'servicebg' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'servicebg' ),
		'filter_items_list'     => _x( 'Filter Service Items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'servicebg' ),
		'items_list_navigation' => _x( 'Service Items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'servicebg' ),
		'items_list'            => _x( 'Service Items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'servicebg' ),
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

add_action( 'init', 'servicebg_register_service_cpt' );


/**
 * Register a custom taxonomy category called "service category".
 *
 * @return void
 */
function servicebg_register_service_category_taxonomy() {

     $args = array();
     $labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'servicebg' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'servicebg' ),
		'search_items'      => __( 'Search Categories', 'servicebg' ),
		'all_items'         => __( 'All Categories', 'servicebg' ),
		'parent_item'       => __( 'Parent Category', 'servicebg' ),
		'parent_item_colon' => __( 'Parent Category:', 'servicebg' ),
		'edit_item'         => __( 'Edit Category', 'servicebg' ),
		'update_item'       => __( 'Update Category', 'servicebg' ),
		'add_new_item'      => __( 'Add New Category', 'servicebg' ),
		'new_item_name'     => __( 'New Category Name', 'servicebg' ),
		'menu_name'         => __( 'Category', 'servicebg' ),
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

add_action( 'init', 'servicebg_register_service_category_taxonomy' );


/**
 * Register meta box(es).
 * 
 * @return void
 */
function service_details_metabox() {
	add_meta_box(
	    'service_details_metabox_id',       	// Unique ID for the metabox
	    'Service Details',                  	// Title of the metabox
	    'service_details_metabox_callback', 	// Callback function that renders the metabox
	    'service',        					// Post type where it will appear
	    'side',                         		// Context: where on the screen (side, normal, or advanced)
	    'default',                       		// Priority: default, high, low
		array(
			'__block_editor_compatible_meta_box' => true,
			'__back_compat_meta_box'             => false,
		)
	);
 }
 add_action( 'add_meta_boxes', 'service_details_metabox' );
 
 
 function service_details_metabox_callback( $post ) {
	// Add a nonce field for security
	wp_nonce_field( 'service_details_metabox_nonce_action', 'service_details_metabox_nonce' );
 
	$service_address = get_post_meta( $post->ID, 'service_address', true );
 
	echo '<label for="service_address">Address: </label>';
	echo '<input type="text" id="service_address" name="service_address" value="' . esc_attr( $service_address ) . '" style="width: 100%;" />';
 }
 
 
 function service_save_metabox( $post_id ) {
	// Check for nonce security
	if ( ! isset( $_POST['service_details_metabox_nonce'] ) ||
		! wp_verify_nonce( $_POST['service_details_metabox_nonce'], 'service_details_metabox_nonce_action' ) ) {
	    return;
	}
 
	// Check for autosave or bulk edit
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
	    return;
	}
 
	// Check user permissions
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
	    return;
	}
 
	if ( isset( $_POST['_inline_edit'] ) ) {
		return;
	}
 
	if ( isset( $_POST['service_address'] ) ) {
	    update_post_meta( $post_id, 'service_address', sanitize_text_field( $_POST['service_address'] ) );
	}
 }
 add_action( 'save_post', 'service_save_metabox' );


?>