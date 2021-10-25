<?php

/** 
 * Add Homepage Customization Section +
 * Add Image Upload
 */
add_action('customize_register', function(WP_Customize_Manager $manager) {

    /** Add Homepage Customization Section */
    $manager->add_section('my_theme_customization', [
        'title' => 'Homepage Customization',
    ]);
    
    /** Add Image Upload */
    $manager->add_setting('header_background_image', [
        // 'default' => get_template_directory_uri() . '/img/background-jumbotron.png',
        'default' => '52',
        // 'sanitize_callback' => 'sanitize_hex_color'
    ]);
    $manager->add_control(new WP_Customize_Media_Control($manager, 'header_background_image', [
        'section' => 'my_theme_customization',
        'label' => 'Header background image'
    ]));
});

/** Add Image Background Position Variable */
add_action('customize_register', function(WP_Customize_Manager $manager) {
    $manager->add_setting('header_background_image_position', [
        'default' => '71'
    ]);
    $manager->add_control('header_background_image_position', [
        'section' => 'my_theme_customization',
        'setting' => 'header_background_image_position',
        'label' => 'Header background image position (in %)'
    ]);
});
