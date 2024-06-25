<?php
/**
 * Bootstraps the Theme.
 *
 * @package Omnixima
 */

 namespace OMNIXIMA\inc;

 use OMNIXIMA\inc\traits\singleton;

 Class OMNI_THEME{
    use singleton;

    protected function __construct(){
        //load other classes.
        Assets::get_instance();
        Menus::get_instance();
        Meta_Boxes::get_instance();
        Sidebars::get_instance();
       // Clock_Widget::get_instance();
		//Block_Patterns::get_instance();

        $this->setup_hooks();

    }

    protected function setup_hooks(){
        //actions and filters
        add_action( 'after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme(){
        //Theme Title
            /**
             * Let WordPress manage the document title.
             * By adding theme support, we declare that this theme does not use a
             * hard-coded <title> tag in the document head, and expect WordPress to
             * provide it for us.
             */
        add_theme_support('title-tag');

        //Custom Logo
            /**
             * Custom logo.
             *
             * @see Adding custom logo
             * @link https://developer.wordpress.org/themes/functionality/custom-logo/#adding-custom-logo-support-to-your-theme
             */
        add_theme_support('custom-logo',[
            'header-text'          => ['site-title', 'site-description'],
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true,
        ]);

        //Custom Background
            /**
             * Adds Custom background panel to customizer.
             *
             * @see Enable Custom Backgrounds
             * @link https://developer.wordpress.org/themes/functionality/custom-backgrounds/#enable-custom-backgrounds
             */
        add_theme_support( 'custom-background', [
            'default-color' => 'fff',
            'default-image' => '',
            'default-repeat' => 'no-repeat',
        ] );


        //Thumbnail Image Support
        add_theme_support( 'post-thumbnails', array('page', 'post'));
        add_image_size( 'post-thumbnails', 375, 250, true);

        //Register Image Size
        add_image_size( 'featured-thumbnail', 375, 250, true);



        add_theme_support( 'customize-selective-refresh-widgets');
        add_theme_support( 'automatic-feed-links');
        add_theme_support( 'html5', [
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script'
        ]);

        add_editor_style();
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide');
        add_theme_support( 'editor-styles' );
        remove_theme_support( 'core-block-patterns' );

        global $content_width;
        if (! isset($content_width)){
            $content_width = 1210;
        };

    }

 }