<?php 

// Theme Supports
add_theme_support('title-tag');
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails', ['page']);
}
function mytheme_block_editor() {
    add_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
add_action( 'after_setup_theme', 'mytheme_block_editor' );
add_theme_support( 'align-wide' );

// Registering Assets (Bootstrap, Styles & Scripts)
function loadAssets() {
    wp_register_style("bootstrap", get_template_directory_uri() . "/node_modules/bootstrap/dist/css/bootstrap.min.css");
    wp_register_style("style", get_template_directory_uri() . "/style.css");
    wp_register_script("bootstrap", get_template_directory_uri() . "/node_modules/bootstrap/dist/js/bootstrap.min.js", null, null, true);
    wp_enqueue_style("bootstrap");
    wp_enqueue_style("style");
    wp_enqueue_script("bootstrap");
}
add_action("wp_enqueue_scripts", "loadAssets");

// Altering title separator
function myTitleSeparator ($separator) {
    $separator = " | ";
    return $separator;
}
add_filter("document_title_separator", "myTitleSeparator");

// Altering image classs
function add_img_class( $class ) {
    return $class . ' img-fluid';
}
add_filter( 'get_image_tag_class', 'add_img_class' );

function add_image_fluid_class($content) {
    global $post;
    $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
    $replacement = '<img$1class="$2 my-3 img-fluid"$3>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
 }
 add_filter('the_content', 'add_image_fluid_class');
