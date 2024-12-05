<?php



/**
* Generated Options Page
*/

// Hook to initialize the settings
add_action( 'admin_init', 'servicebg_plugin_settings_init' );

/**
* Initializes settings and registers them with the Settings API.
*/
function servicebg_plugin_settings_init() {
     // Register the setting to store options in the database
     register_setting( 'servicebg_custom_options_group', 'servicebg_custom_options' );

     // Settings section
     add_settings_section(
          'custom_plugin_main_section', // Section ID
          __( 'ServiceBG Settings', 'servicebg' ), // Section title
          'servicebg_plugin_section_callback', // Callback function for the section
          'servicebg_custom_options' // Page to display the section
     );

     // Field for the text input
     add_settings_field(
          'servicebg_category_posts_per_page', // Field ID
          __( 'Number of posts for the category archive', 'servicebg' ), // Label for the field
          'servicebg_category_posts_per_page_callback', // Callback function for rendering the field
          'servicebg_custom_options', // Page where the field will be displayed
          'custom_plugin_main_section' // Section where the field belongs
     );

     // Checkbox field
     add_settings_field(
          'servicebg_homepage_slider', // Field ID
          __( 'Enable Homepage Slider', 'servicebg' ), // Label for the checkbox
          'servicebg_homepage_slider_callback', // Callback function for rendering the checkbox
          'servicebg_custom_options', // Page where the checkbox will be displayed
          'custom_plugin_main_section' // Section where the checkbox belongs
     );
}

/**
* Callback function for the main section description.
*/
function servicebg_plugin_section_callback() {
     echo '<p>' . __( 'Configure the main settings for this plugin.', 'servicebg' ) . '</p>';
}

/**
* Callback function for rendering the text field.
*/
function servicebg_category_posts_per_page_callback() {
     // Retrieve the existing value from the database
     $options = get_option( 'servicebg_custom_options' );
     $value   = isset( $options['servicebg_category_posts_per_page'] ) ? esc_attr( $options['servicebg_category_posts_per_page'] ) : '';
     ?>
     <input type="text" name="servicebg_custom_options[servicebg_category_posts_per_page]" value="<?php echo $value; ?>" />
     <p class="description"><?php esc_html_e( 'Set a number of posts per page for the cagegory achive.', 'servicebg' ); ?></p>
     <?php
}

/**
 * Callback function for rendering the checkbox field.
 */
function servicebg_homepage_slider_callback() {
    // Retrieve the existing value from the database
    $options = get_option( 'servicebg_custom_options' );
    $checked = isset( $options['servicebg_homepage_slider'] ) && $options['servicebg_homepage_slider'] ? 'checked' : '';
    ?>
    <input type="checkbox" name="servicebg_custom_options[servicebg_homepage_slider]" value="1" <?php echo $checked; ?> />
    <p class="description"><?php esc_html_e( 'Check to enable the feature.', 'servicebg' ); ?></p>
    <?php
}

// Hook to add the options page to the admin menu
add_action( 'admin_menu', 'custom_plugin_add_options_page' );

/**
* Adds the options page to the admin menu.
*/
function custom_plugin_add_options_page() {
     add_options_page(
          __( 'ServiceBG Options', 'servicebg' ), // Page title
          __( 'ServiceBG Options', 'servicebg' ), // Menu title
          'manage_options', // Capability required to access the page
          'servicebg-custom-options', // Menu slug
          'servicebg_custom_options_page_callback' // Callback function to render the page
     );
}

/**
* Renders the options page content.
*/
function servicebg_custom_options_page_callback() {
     ?>
     <div class="wrap">
          <h1><?php esc_html_e( 'ServiceBG Options', 'servicebg' ); ?></h1>
          <form action="options.php" method="post">
               <?php

               // Output nonce, action, and option page fields for the settings page
               settings_fields( 'servicebg_custom_options_group' );

               // Output settings sections and fields
               do_settings_sections( 'servicebg_custom_options' );

               // Output the save settings button
               submit_button( __( 'Update Settings', 'servicebg' ) );
               ?>
          </form>
     </div>
     <?php
}


?>