<?php


/**
* Assets function for enqueue scripts and styles
*/
function servicebg_plugin_enqueue_assets() {
	wp_enqueue_script(
          'ajax-script',
          plugins_url( '../assets/scripts/scripts.js', __FILE__ ),
          array(),
          1.0
     );

     wp_localize_script(
          'ajax-script',
          'my_ajax_object',
          array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
     );
}

add_action( 'wp_enqueue_scripts', 'servicebg_plugin_enqueue_assets' );

/**
* Dynamic function that handles the AJAX Upvote
*
* @return void
*/
function servicebg_service_upvote() {
     $id = esc_attr( $_POST['service_id'] );

     $upvote_number = get_post_meta( $id, 'votes', true );

     if ( empty( $upvote_number ) ) {
          $upvote_number = 0;
     }

    update_post_meta( $id, 'votes', $upvote_number + 1 );
}

add_action( 'wp_ajax_nopriv_servicebg_service_upvote', 'servicebg_service_upvote' );
add_action( 'wp_ajax_servicebg_service_upvote', 'servicebg_service_upvote' );


/**
 * Callback function to display a service title with a shortcode
 *
 * @return void
 */
function display_service_title( $attributes ) {

     $attributes = shortcode_atts( array(
		'id' => 'id',
          'show_image' => '',
	), $attributes, 'bartag' );

     if ( ! empty( $attributes['id'] ) ) {
           $title = get_the_title( $attributes['id'] );
     }

     if ( ! empty( $attributes['show_image'] ) ) {
          $image = get_the_post_thumbnail_url( $attributes['id'] );
     }

     $content = '<div class="shortcode-class">';

     if ( ! empty( $title ) ) {
          $content .= $title;
     }

     if ( ! empty( $image ) ) {
          $content .= '<img src="'. $image .'">';
     }

     $content .= '</div>';

     return $content;
}

add_shortcode( 'display_service_title', 'display_service_title' );


/**
 * A custom function that filter our custom category archive
 *
 * @return void
 */
function servicebg_theme_category_archive_query( $query ) {
     $servicebg_options = get_option( 'servicebg_custom_options' );
 
     if ( ! is_admin() && $query->is_main_query() && is_category() ) {
          if ( ! empty( $servicebg_options['servicebg_category_posts_per_page'] ) ) {
               $query->set( 'posts_per_page', esc_attr( $servicebg_options['servicebg_category_posts_per_page'] ) );
          }
     }
}

add_action( 'pre_get_posts', 'servicebg_theme_category_archive_query' );


?>