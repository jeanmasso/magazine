<?php

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function my_theme_enqueue_script() {
  // styles
  wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' );
  wp_enqueue_style( 'my-style', get_template_directory_uri() . '/sass/theme.css');
  wp_enqueue_style( 'load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );
  // scripts
  wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js' );
  wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_script');

// create a function to add theme support options
function theme_support_options() {
  $defaults = array(
    'height'      => 150,
    'width'       => 250,
    'flex-height' => false, // <-- setting both flex-height and flex-width to false maintains an aspect ratio
    'flex-width'  => false
  );
  add_theme_support( 'custom-logo', $defaults );
}
// call the function in the hook
add_action( 'after_setup_theme', 'theme_support_options' );

register_nav_menus( array(
  'main' => 'Menu Principal',
  'footer' => 'Bas de page',
) );
