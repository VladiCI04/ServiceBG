<?php

/*
 * Plugin Name: ServiceBG
 * Version: 1.0
 * Author: Vladimir Ivanov
 * Description: My main plugin for WordPress course in SoftUni.
 */

 if (!defined( 'SOFTUNI_PLUGIN_VERSION' )) {
     define( 'SOFTUNI_PLUGIN_VERSION', '1.0' );
}

if (!defined( 'SOFTUNI_PLUGIN_ASSETS_PATH' )) {
     define( 'SOFTUNI_PLUGIN_ASSETS_PATH', plugin_dir_url( __FILE__ ) . 'assets' );
}

require 'includes/cpt-services.php';
require 'includes/cpt-testimonial.php'

?>