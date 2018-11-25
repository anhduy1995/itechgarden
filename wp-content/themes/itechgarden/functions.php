<?php

define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core' );
require_once( CORE . '/init.php' );
if ( ! isset( $content_width ) ) {
  $content_width = 620;
}

if ( ! function_exists( 'setting_up_theme' ) ) {
  function setting_up_theme() {
    $language_folder = THEME_URL . '/languages';
    load_theme_textdomain( 'example', $language_folder );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-formats',
            array(
                    'video',
                    'image',
                    'audio',
                    'gallery'
            )
     );
    $default_background = array(
            'default-color' => '#e8e8e8',
    );
    add_theme_support( 'custom-background', $default_background );
    register_nav_menu ( 'primary-menu', __('Primary Menu', 'example') );
     $sidebar = array(
        'name' => __('Main Sidebar', 'example'),
        'id' => 'main-sidebar',
        'description' => 'Main sidebar for example theme',
        'class' => 'main-sidebar',
        'before_title' => '<h3 class="widgettitle">',
        'after_sidebar' => '</h3>'
     );
     register_sidebar( $sidebar );
  }
  add_action ( 'init', 'setting_up_theme' );
}

if ( ! function_exists( 'example_logo' ) ) {
  function example_logo() {
      if ( is_home() ) {
      printf(
          '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
          get_bloginfo( 'url' ),
          get_bloginfo( 'description' ),
          '<img src="'.home_url().'/wp-content/themes/itechgarden/images/logo-itechgarden.png" >'
          );
    } else {
      printf(
          '</p><a href="%1$s" title="%2$s">%3$s</a></p>',
          get_bloginfo( 'url' ),
          get_bloginfo( 'description' ),
          '<img src="'.home_url().'/wp-content/themes/itechgarden/images/logo-itechgarden.png" >'
          );
      } // endif
    }
 }

if ( ! function_exists( 'example_menu' ) ) {
  function example_menu( $slug ) {
      $menu = array(
          'theme_location' => $slug,
          'container' => 'nav',
          'container_class' => $slug,
          );
      wp_nav_menu( $menu );
  }
}

function themename_custom_logo_setup() {
    $defaults = array(
        'flex-height' => true,
        'flex-width'  => true,
    );
    add_theme_support( 'custom-logo');
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
