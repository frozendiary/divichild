<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Override mime rules
function fd_mime_rules( $fd_mimes ) {
		$fd_mimes['svg'] = 'image/svg+xml';
		$fd_mimes['otf'] = 'font/otf';
		$fd_mimes['ttf'] = 'font/ttf';
  
	return $fd_mimes;
}

add_filter( 'upload_mimes', 'fd_mime_rules' );
