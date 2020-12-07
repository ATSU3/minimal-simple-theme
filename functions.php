<?php

function custom_theme_assets() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );