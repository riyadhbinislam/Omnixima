<?php
/**
 * Theme Sidebars
 * @package Omnixima
 */

namespace OMNIXIMA\inc;
use OMNIXIMA\inc\traits\singleton;

class Sidebars {
    use singleton;

    protected function __construct() {
        //load other classes.
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        //actions and filters
        add_action( 'widgets_init', [ $this, 'register_sidebars'] );
        add_action( 'widgets_init', [ $this, 'register_clock_widget'] );
    }

    public function register_sidebars(){
        register_sidebar( array(
            'name'          => __( 'Main Sidebar', 'omnixima' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Main Sidebar', 'omnixima' ),
            'before_widget' => '<div id="%1$s" class="widget widget-main %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer Sidebar', 'omnixima' ),
            'id'            => 'sidebar-2',
            'description'   => __( 'Footer Sidebar', 'omnixima' ),
            'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
        ) );
    }

    public function register_clock_widget(){
        register_widget( 'OMNIXIMA\inc\Clock_Widget' );


    }
}
