<?php 

// Theme Supports
add_theme_support('title-tag');

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
