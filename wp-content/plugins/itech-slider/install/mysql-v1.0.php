<?php
global $install_table_plugin;
$install_table_plugin = "1.0";

function itech_slider_install()
{
	global $wpdb;
	global $install_table_plugin;
	$sql_slider = 
	"CREATE TABLE `wp_itech_slider` ( 
			`slider_id` INT NOT NULL AUTO_INCREMENT , 
			`slider_url` VARCHAR(255) NULL , 
			`slider_status` VARCHAR(255) NULL , 
			`slider_sort` INT NOT NULL ,
			`slider_shortcode` VARCHAR(255) NULL,
			`slider_group` INT NULL, 
			PRIMARY KEY (`slider_id`)) 
			ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;";
	$sql_group_slider = 
	"CREATE TABLE `wp_itech_group_slider` ( 
			`slider_group_id` INT NOT NULL AUTO_INCREMENT , 
			`slider_group_title` VARCHAR(255) NULL ,
			`slider_group_alias` VARCHAR(255) NULL , 
			`slider_group_status` VARCHAR(255) NULL , 
			PRIMARY KEY (`slider_group_id`)) 
			ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;";
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql_slider);
	dbDelta($sql_group_slider);
	add_option("itech_slider_db_version", $install_table_plugin);
}