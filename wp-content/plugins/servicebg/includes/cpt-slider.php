<?php


/**
* OOP Part
*/
if ( ! class_exists( 'Servicebg_Slider' ) ) :

	class Servicebg_Slider {
		public function __construct() {
			add_action( 'init', array( $this, 'servicebg_register_slider_cpt' ) );
		}
	
		/**
		* Register a custom post type called "slider".
		*
		* @see get_post_type_labels() for label keys.
		*/
		public function servicebg_register_slider_cpt() {
			$labels = array(
				'name'                  => _x( 'Slider', 'Post type general name', 'servicebg' ),
				'singular_name'         => _x( 'Slider', 'Post type singular name', 'servicebg' ),
				'menu_name'             => _x( 'Slider', 'Admin Menu text', 'servicebg' ),
				'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'servicebg' ),
				'add_new'               => __( 'Add New', 'servicebg' ),
				'add_new_item'          => __( 'Add New Slider', 'servicebg' ),
				'new_item'              => __( 'New Slider', 'servicebg' ),
				'edit_item'             => __( 'Edit Slider', 'servicebg' ),
				'view_item'             => __( 'View Slider', 'servicebg' ),
				'all_items'             => __( 'All Slider', 'servicebg' ),
				'search_items'          => __( 'Search Slider', 'servicebg' ),
				'not_found'             => __( 'No Slider found.', 'servicebg' ),
				'not_found_in_trash'    => __( 'No Slider found in Trash.', 'servicebg' ),
				'items_list_navigation' => _x( 'Slider list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'servicebg' ),
				'items_list'            => _x( 'Slider list', 'Screen reader text for the list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'servicebg' ),
			);
	
			$args = array(
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'show_in_rest'       => true,
				'supports'           => array( 'title', 'editor', 'author' ),
			);
	
			register_post_type( 'slider', $args );
		}
	}

endif;
$servicebg_slider = new Servicebg_Slider();


?>