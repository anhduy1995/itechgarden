<?php
/**
 * Plugin Name: Plugin Itech Slider
 * Plugin URI: https://itechgarden.com/
 * Description: Tạo slider bằng shortcode
 * Version: 1.0
 * Author: Anh Duy
 * Author URI: https://itechgarden.com/
 */

define('ITECH_SLIDER_URL', plugin_dir_url(__FILE__));
define('ITECH_SLIDER_DIR', plugin_dir_path(__FILE__));

 function create_slider(){
	add_menu_page( 'Itech Slider', 'Itech Slider', 'manage_options', 'itech-slider', 'create_slider_function','',15);
 }
 add_action( 'admin_menu', 'create_slider' );

 function update_slider(){
 	add_submenu_page( 'itech-slider', 'Itech Slider', 'Itech Slider', 'manage_options', 'update-itech-slider', 'update_slider_function');
 }
 add_action('admin_menu', 'update_slider');

register_activation_hook(__FILE__, 'itech_slider_install');

include_once(ITECH_SLIDER_DIR."install/mysql-v1.0.php");
require_once(ITECH_SLIDER_DIR."functions/manage-itech-slider.php");
?>