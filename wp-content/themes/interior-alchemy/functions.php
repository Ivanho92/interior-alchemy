<?php 

require_once('options/customization.php');

// Theme Supports
add_theme_support('title-tag');
add_theme_support("menus");
register_nav_menu("nav-menu", "Nav Menu");
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

 // Adding a new column/ removing columns for CT "pages"
 /** Add a new column "Template" **/
 add_filter( 'manage_pages_columns', 'page_column_views' );
 add_action( 'manage_pages_custom_column', 'page_custom_column_views', 5, 2 );
 function page_column_views( $defaults )
 {
    $defaults['page-layout'] = __('Template');
    return $defaults;
 }
 function page_custom_column_views( $column_name, $id )
 {
    

    if ( $column_name === 'page-layout' ) {
        $set_template = get_post_meta( get_the_ID(), '_wp_page_template', true );
        if ( $set_template == 'default' ) {
            echo 'Default';
        }
        $templates = get_page_templates();
        ksort( $templates );
        foreach ( array_keys( $templates ) as $template ) :
            if ( $set_template == $templates[$template] ) echo $template;
        endforeach;
    }
 }

/** Remove a Author, Comments Columns **/
 add_filter( 'manage_pages_columns', 'remove_unnecessary_columns' );
 function remove_unnecessary_columns( $columns )
 {
    
        unset(
            $columns['author'],
            $columns['comments']
        );

        return $columns;
 }
 
/** Disabling CT Posts */
 function remove_posts_menu() {
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');

/** Disabling Comments */
// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );


/** Changing admin menu items order */
function wpse_custom_menu_order( $menu_ord ) {
    if ( !$menu_ord ) return true;

    return array(
        'index.php', // Dashboard

        'separator1', // First separator

        'edit.php?post_type=page', // Pages
        'edit.php', // Posts
        'upload.php', // Media
        'link-manager.php', // Links
        'edit-comments.php', // Comments

        'separator2', // Second separator

        'themes.php', // Appearance
        'plugins.php', // Plugins
        'users.php', // Users
        'tools.php', // Tools
        'options-general.php', // Settings
        'separator-last', // Last separator
    );
}
add_filter( 'custom_menu_order', 'wpse_custom_menu_order', 10, 1 );
add_filter( 'menu_order', 'wpse_custom_menu_order', 10, 1 );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}