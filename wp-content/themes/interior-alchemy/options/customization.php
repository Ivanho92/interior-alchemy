<?php

/** 
 * Homepage Customization
 */
add_action('customize_register', function(WP_Customize_Manager $manager) {

    /** Add Homepage Customization Section */
    $manager->add_section('my_theme_customization', [
        'title' => 'Customization & Translation Keys ',
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

/** Homepage Lead */
add_action('customize_register', function(WP_Customize_Manager $manager) {
    $manager->add_setting('homepage_lead', [
        'default' => 'Offerings'
    ]);
    $manager->add_control('homepage_lead', [
        'section' => 'my_theme_customization',
        'setting' => 'homepage_lead',
        'label' => 'Homepage Lead'
    ]);
});

/** Homepage Description */
add_action('customize_register', function(WP_Customize_Manager $manager) {
    $manager->add_setting('homepage_description', [
        'default' => 'A methodology developped by Mathilde Grimm that utilizes a range of holistic healing modalities to facilititate a return to home - within and without.'
    ]);
    $manager->add_control(new WP_Customize_Control($manager, 'homepage_description', [
        'section'   => 'my_theme_customization',
        'type'      => 'textarea',
        'label'     => 'Homepage Description'
    ]));
});

/** 
 * Miscelaneous
 */
/** CTA Labels */
add_action('customize_register', function(WP_Customize_Manager $manager) {
    $manager->add_setting('cta_label', [
        'default' => 'let\'s return home together ♡'
    ]);
    $manager->add_control(new WP_Customize_Control($manager, 'cta_label', [
        'section'   => 'my_theme_customization',
        'type'      => 'text',
        'label'     => 'CTA Label'
    ]));
});

add_action('customize_register', function(WP_Customize_Manager $manager) {
    $manager->add_setting('cta', [
        'default' => 'CONTACT ME'
    ]);
    $manager->add_control(new WP_Customize_Control($manager, 'cta', [
        'section'   => 'my_theme_customization',
        'type'      => 'text',
        'label'     => 'CTA'
    ]));
});

/** 
 * Contact Info
 */
/** Phone Number */
add_action('customize_register', function(WP_Customize_Manager $manager) {
    $manager->add_setting('contact_phone', [
        'default' => '+32/474.43.20.32'
    ]);
    $manager->add_control(new WP_Customize_Control($manager, 'contact_phone', [
        'section'   => 'my_theme_customization',
        'type'      => 'text',
        'label'     => 'Contact Phone Number'
    ]));
});

/** Email */
add_action('customize_register', function(WP_Customize_Manager $manager) {
    $manager->add_setting('contact_email', [
        'default' => 'mathildegrimm@icloud.com'
    ]);
    $manager->add_control(new WP_Customize_Control($manager, 'contact_email', [
        'section'   => 'my_theme_customization',
        'type'      => 'text',
        'label'     => 'Contact Email'
    ]));
});

/** 
 * Social Networks
 */
/** Instagram */
add_action('customize_register', function(WP_Customize_Manager $manager) {
    $manager->add_setting('social_pinterest', [
        'default' => 'https://pin.it/6up64we'
    ]);
    $manager->add_control(new WP_Customize_Control($manager, 'social_pinterest', [
        'section'   => 'my_theme_customization',
        'type'      => 'text',
        'label'     => 'Pinterest URL',
        'description'     => 'Do not forget to include the "http(s)/" prefix'
    ]));
});

/** Pinterest */
add_action('customize_register', function(WP_Customize_Manager $manager) {
    $manager->add_setting('social_instagram', [
        'default' => 'https://www.instagram.com/mathildegrimm/'
    ]);
    $manager->add_control(new WP_Customize_Control($manager, 'social_instagram', [
        'section'   => 'my_theme_customization',
        'type'      => 'text',
        'label'     => 'Instagram URL',
        'description'     => 'Do not forget to include the "http(s)/" prefix'
    ]));
});