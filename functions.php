<?php
/**
 * Functions and definitions
 *
 * @package Omnixima
 */

// Define constants for directory paths and URIs
if ( ! defined( 'OMNIXIMA_DIR_URI' ) ) {
    define( 'OMNIXIMA_DIR_URI', get_template_directory_uri() );
}

if ( ! defined( 'OMNIXIMA_DIR_PATH' ) ) {
    define( 'OMNIXIMA_DIR_PATH', get_template_directory() );
}

// Autoloader function
require_once OMNIXIMA_DIR_PATH . '/inc/helpers/autoloader.php';
require_once OMNIXIMA_DIR_PATH . '/inc/helpers/template-tags.php';

// Initialize the theme
OMNIXIMA\inc\OMNI_THEME::get_instance();

include "function/defults.php";

