<?php
// Custom function to add content after the main content
function custom_content_after_main() {
    echo '<p>This is custom content added after the main content.</p>';
}
// Attach the custom function to the custom action hook
add_action('wprealizer_after_main_content', 'custom_content_after_main');
function my_theme_enqueue_styles() {
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());
    wp_enqueue_style('my-theme-custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0');
    wp_enqueue_script('my-theme-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


function my_theme_setup() {
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 130,
        'width'       => 130,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-theme'),
        'footer' => __('Footer Menu', 'my-theme'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');
