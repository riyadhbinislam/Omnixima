<?php
/**
 * Enqueue Theme Assets
 * @package Omnixima
 */

namespace OMNIXIMA\inc;
use OMNIXIMA\inc\traits\singleton;

class Assets {
    use singleton;

    protected function __construct() {
        //load other classes.
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        //actions and filters
        add_action('wp_enqueue_scripts', [ $this, 'register_styles' ]);
        add_action('wp_enqueue_scripts', [ $this, 'register_scripts' ]);
    }

    public function register_styles() {
        wp_enqueue_style('wp-style', get_stylesheet_uri(), array(), '1.0.1', 'all');
        wp_register_style( 'omni_custom', OMNIXIMA_DIR_URI . '/css/custom.css', array(), filemtime( OMNIXIMA_DIR_PATH . '/css/custom.css' ), 'all' );
        wp_register_style( 'omni_bootstrap', OMNIXIMA_DIR_URI . '/library/css/bootstrap.min.css', array(), false, 'all' );

        wp_enqueue_style('omni_custom');
        wp_enqueue_style('omni_bootstrap');
        wp_enqueue_style( 'omni_google_font', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&family=Roboto:wght@400;700&display=swap', false);
    }

    public function register_scripts() {
        wp_register_script('omni_main', OMNIXIMA_DIR_URI . '/js/main.js', ['jquery'], filemtime( OMNIXIMA_DIR_PATH . '/js/main.js' ), 'true' );
        wp_register_script('omni_bootstrap_js', OMNIXIMA_DIR_URI . '/library/js/bootstrap.min.js', array(), false, 'true' );

        wp_enqueue_script('jquery');
        wp_enqueue_script('omni_main');
        wp_enqueue_script('omni_bootstrap_js');
    }
}
