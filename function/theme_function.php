<?php
function omni_customizar_register($wp_customize){

// Logo Area
$wp_customize->add_section('omni_header_area', array(
    // ['omnixima'] is a text domain to change Language.
    'title' => __('Header Area', 'omnixima'),
    'description' => 'Update Your Header Here',
));

$wp_customize->add_setting('omni_logo', array(
    'default' => get_bloginfo('template_directory').'/img/logo.webp',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'omni_logo', array(
    'label' => 'Logo Upload',
    'description' => 'Upload Your Logo Here',
    'setting' => 'omni_logo',
    'section' => 'omni_header_area',
) ));

//Menu Position
$wp_customize->add_section('omni_menu_option', array(
    // ['omnixima'] is a text domain to change Language.
    'title' => __('Menu Position Option', 'omnixima'),
    'description' => 'Set Your Menu Position Here',
));

$wp_customize->add_setting('omni_menu_position', array(
    'default' => 'right_menu',
));

$wp_customize->add_control('omni_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Set Your Menu Position Here',
    'setting' => 'omni_menu_position',
    'section' => 'omni_menu_option',
    'type' => 'radio',
    'choices' => array(
        'left_menu' => 'Left Menu',
        'center_menu' => 'Center Menu',
        'right_menu' => 'Right Menu',
    )
));

 //Footer Area
 $wp_customize->add_section('omni_footer_option', array(
    // ['omnixima'] is a text domain to change Language.
    'title' => __('Footer Option', 'omnixima'),
    'description' => 'Set Your Footer Here',
));

$wp_customize->add_setting('omni_footer_settings', array(
    'default' => '&copy; Copyright 2024 | Omnixima',
));

$wp_customize->add_control('omni_footer_settings', array(
    'label' => 'Copyright Text',
    'description' => 'Set Your Copyright Text Here',
    'setting' => 'omni_footer_settings',
    'section' => 'omni_footer_option',

));

}

add_action('customize_register','omni_customizar_register');