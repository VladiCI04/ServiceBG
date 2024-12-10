<?php

/*
 * Plugin Name: ServiceBG
 * Version: 1.0
 * Author: Vladimir Ivanov
 * Description: My main plugin for WordPress course in SoftUni.
 */

 if (!defined( 'SERVICEBG_PLUGIN_VERSION' )) {
     define( 'SERVICEBG_PLUGIN_VERSION', '1.0' );
}

if (!defined( 'SERVICEBG_PLUGIN_ASSETS_PATH' )) {
     define( 'SERVICEBG_PLUGIN_ASSETS_PATH', plugin_dir_url( __FILE__ ) . 'assets' );
}

require 'includes/cpt-service.php';
require 'includes/cpt-testimonial.php';
require 'includes/cpt-slider.php';
require 'includes/cpt-team.php';
require 'includes/functions.php';
require 'includes/options-page.php';

?>