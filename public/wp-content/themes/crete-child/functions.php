<?php
/**
 * Theme functions and definitions.
 */
function crete_child_enqueue_styles() {
    if ( SCRIPT_DEBUG ) {
        wp_enqueue_style( 'crete-style' , get_template_directory_uri() . '/style.css' );
    } else {
        wp_enqueue_style( 'crete-minified-style' , get_template_directory_uri() . '/style.min.css' );
    }
    wp_enqueue_style( 'crete-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'crete-style' ),
        wp_get_theme()->get('Version')
    );
}
add_action(  'wp_enqueue_scripts', 'crete_child_enqueue_styles' );