<?php


/**
* OOP Part
*/
if ( ! class_exists( 'Servicebg_Team' ) ) :

	class Servicebg_Team {
		public function __construct() {
			add_action( 'init', array( $this, 'servicebg_register_team_cpt' ) );
		}
	
		/**
		* Register a custom post type called "team".
		*
		* @see get_post_type_labels() for label keys.
		*/
		public function servicebg_register_team_cpt() {
			$labels = array(
				'name'                  => _x( 'Team', 'Post type general name', 'servicebg' ),
				'singular_name'         => _x( 'Team', 'Post type singular name', 'servicebg' ),
				'menu_name'             => _x( 'Team', 'Admin Menu text', 'servicebg' ),
				'name_admin_bar'        => _x( 'Team', 'Add New on Toolbar', 'servicebg' ),
				'add_new'               => __( 'Add New', 'servicebg' ),
				'add_new_item'          => __( 'Add New Team', 'servicebg' ),
				'new_item'              => __( 'New Team', 'servicebg' ),
				'edit_item'             => __( 'Edit Team', 'servicebg' ),
				'view_item'             => __( 'View Team', 'servicebg' ),
				'all_items'             => __( 'All Team', 'servicebg' ),
				'search_items'          => __( 'Search Team', 'servicebg' ),
				'not_found'             => __( 'No Team found.', 'servicebg' ),
				'not_found_in_trash'    => __( 'No Team found in Trash.', 'servicebg' ),
				'items_list_navigation' => _x( 'Team list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'servicebg' ),
				'items_list'            => _x( 'Team list', 'Screen reader text for the list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'servicebg' ),
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
	
			register_post_type( 'team', $args );
		}
	}

endif;
$servicebg_team = new Servicebg_Team();


?>