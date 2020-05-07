<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

    /* Add JFIF image file type for uploads */

    add_filter( ‘upload_mimes’, ‘custom_myme_types’, 1, 1 );
    function custom_myme_types( $mime_types ) {
    $mime_types[‘jfif’] = ‘image/jfif+xml’; // Adding .jfif extension

    return $mime_types;
    }
