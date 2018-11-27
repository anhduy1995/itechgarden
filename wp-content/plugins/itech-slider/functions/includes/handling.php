<?php
ob_start();  
if(isset($_GET['page']) && $_GET['page'] == 'create-itech-slider'){
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		global $wpdb;
		$title_slider = $_POST['title_slider'];
		$shortcode_slider = $_POST['shortcode_slider'];
		$status_slider = $_POST['status'];
		$data = array('slider_group_title' => $title_slider, 'slider_group_alias' => $shortcode_slider, 'slider_group_status' => $status_slider);
		$format = array('%s','%s','%d');
		$wpdb->query('START TRANSACTION');
		$table_member_code = $wpdb->prefix . "itech_group_slider";
		try{
			$insert = $wpdb->insert($table_member_code,$data,$format);
			$wpdb->query('COMMIT');
			if($insert == true){
				$url = admin_url('admin.php?page=itech-slider');
				wp_redirect($url);
			}
		}
		catch(\Exception $e){
			$wpdb->query('ROLLBACK');
		}
	}
}