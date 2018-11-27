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

function admin_styles(){
    wp_register_style( 'am_admin_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style( 'am_admin_ui', get_template_directory_uri() . '/css/darktooltip.min.css' );
    wp_register_style( 'am_admin_darktooltip', get_template_directory_uri() . '/css/jquery-ui.css' );
    wp_register_style( 'am_admin_slick', get_template_directory_uri() . '/css/slick.css' );
    wp_register_style( 'am_admin_bootstrap_datatables', get_template_directory_uri() . '/css/dataTables.bootstrap.min.css');
    wp_register_style( 'am_admin_custom_style_admin', get_template_directory_uri() . '/css/admin-custom.css' );
    wp_enqueue_script( 'am_admin_jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js' );
    wp_enqueue_script( 'am_admin_ui', get_template_directory_uri() . '/js/jquery-ui.js' );
    wp_enqueue_script( 'am_admin_bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
    wp_enqueue_script( 'am_admin_jquery_validate', get_template_directory_uri() . '/js/slick.min.js' );
    wp_enqueue_script( 'am_admin_validate_tooltips', get_template_directory_uri() . '/js/jquery-validate.bootstrap-tooltip.js' );
    wp_enqueue_script( 'am_admin_jquery_validate', get_template_directory_uri() . '/js/jquery.validate-1.14.0.min.js' );
    wp_enqueue_script( 'am_admin_jquery_datatables', get_template_directory_uri() . '/js/jquery.dataTables.min.js');
    wp_enqueue_script( 'am_admin_bootstrap_datatables', get_template_directory_uri() . '/js/dataTables.bootstrap.min.js');
    wp_enqueue_script( 'am_admin_notify', get_template_directory_uri() . '/js/bootstrap-notify.js' );

    wp_enqueue_style( 'am_admin_bootstrap');
    wp_enqueue_style( 'am_admin_ui');
    wp_enqueue_style( 'am_admin_darktooltip');
    wp_enqueue_style( 'am_admin_slick');
    wp_enqueue_style( 'am_admin_custom_style_admin');
    wp_enqueue_style( 'am_admin_bootstrap_datatables');
}
add_action( 'admin_enqueue_scripts', 'admin_styles' );