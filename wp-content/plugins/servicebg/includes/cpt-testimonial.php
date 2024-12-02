<?php


/**
* OOP Part
*/
if ( ! class_exists( 'Servicebg_Testimonials' ) ) :

	class Servicebg_Testimonials {
		public function __construct() {
			add_action( 'init', array( $this, 'servicebg_register_testimonials_cpt' ) );
		}
	
		/**
		* Register a custom post type called "Testimonials".
		*
		* @see get_post_type_labels() for label keys.
		*/
		public function servicebg_register_testimonials_cpt() {
			$labels = array(
				'name'                  => _x( 'Testimonials', 'Post type general name', 'servicebg' ),
				'singular_name'         => _x( 'Testimonials', 'Post type singular name', 'servicebg' ),
				'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'servicebg' ),
				'name_admin_bar'        => _x( 'Testimonials', 'Add New on Toolbar', 'servicebg' ),
				'add_new'               => __( 'Add New', 'servicebg' ),
				'add_new_item'          => __( 'Add New Testimonials', 'servicebg' ),
				'new_item'              => __( 'New Testimonials', 'servicebg' ),
				'edit_item'             => __( 'Edit Testimonials', 'servicebg' ),
				'view_item'             => __( 'View Testimonials', 'servicebg' ),
				'all_items'             => __( 'All Testimonials', 'servicebg' ),
				'search_items'          => __( 'Search Testimonials', 'servicebg' ),
				'parent_item_colon'     => __( 'Parent Testimonials:', 'servicebg' ),
				'not_found'             => __( 'No Testimonials found.', 'servicebg' ),
				'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'servicebg' ),
				'featured_image'        => _x( 'Testimonials Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'servicebg' ),
				'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'servicebg' ),
				'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'servicebg' ),
				'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'servicebg' ),
				'archives'              => _x( 'Testimonials archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'servicebg' ),
				'insert_into_item'      => _x( 'Insert into Testimonials', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'servicebg' ),
				'uploaded_to_this_item' => _x( 'Uploaded to this Testimonials', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'servicebg' ),
				'filter_items_list'     => _x( 'Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'servicebg' ),
				'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'servicebg' ),
				'items_list'            => _x( 'Testimonials list', 'Screen reader text for the list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'servicebg' ),
			);
	
			$args = array(
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'Testimonials' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'show_in_rest'       => true,
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			);
	
			register_post_type( 'testimonials', $args );
		}
	}

endif;
$servicebg_testimonials = new Servicebg_Testimonials();


/**
* Register a custom taxonomy category called "Testimonials category".
*
* @return void
*/
function servicebg_register_testimonials_category_taxonomy() {

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

	register_taxonomy( 'testimonials-category', 'testimonials', $args );

}

add_action( 'init', 'servicebg_register_testimonials_category_taxonomy' );


?>