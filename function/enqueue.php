<?php
function omni_css_js_calling(){
    //css

    wp_enqueue_style('wp-style', get_stylesheet_uri(), array(), '1.0.1', 'all');

    wp_register_style( 'omni_custom', get_template_directory_uri().'/css/custom.css', array(), filemtime( get_template_directory().'/css/custom.css' ), 'all' );

    wp_register_style( 'omni_bootstrap', get_template_directory_uri().'/library/css/bootstrap.min.css', array(),false , 'all' );

    wp_enqueue_style('omni_custom');
    wp_enqueue_style('omni_bootstrap');

    //jQuery

    wp_register_script('omni_main', get_template_directory_uri().'/js/main.js', array(), filemtime( get_template_directory().'/js/main.js' ), 'true' );

    wp_register_script('omni_bootstrap_js', get_template_directory_uri().'/library/js/bootstrap.min.js', array(), false, 'true' );

    wp_enqueue_script('jquery');
    wp_enqueue_script('omni_main');
    wp_enqueue_script('omni_bootstrap_js');

}

add_action('wp_enqueue_scripts','omni_css_js_calling');

//Google Font Enqueue

function omni_google_font(){
    wp_enqueue_style( 'omni_google_font', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&family=Roboto:wght@400;700&display=swap', false);
}

add_action('wp_enqueue_scripts','omni_google_font');
