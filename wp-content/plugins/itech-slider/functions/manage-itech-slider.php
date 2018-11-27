<?php
ob_start(); 
function slider_function(){
	if(isset($_GET['page']) && $_GET['page'] == 'itech-slider'){
		global $wpdb;
		$table_itech_slider = $wpdb->prefix."itech_group_slider";
		$query_group_slider = "SELECT * FROM $table_itech_slider";
		$data_group_slider = $wpdb->get_results($query_group_slider);
	?>
	<div class="col-sm-12">
		<h3 class="text-center">Itech Slider</h3>
	</div>
	<div class="col-sm-12">
		<table class="table table-bordered table-hover table-condensed table-striped table-responsive" id="slider-group">
			<thead>
				<tr>
					<th>#</th>
					<th>Slider Name</th>
					<th>Slider Shortcode</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$number = 1; 
				foreach($data_group_slider as $group_slider){ 
				?>
				<tr>
					<td><?php echo $number; ?></td>
					<td><?php echo $group_slider->slider_group_title ?></td>
					<td>[slider slider="<?php echo $group_slider->slider_group_alias ?>"]</td>
					<td><?php echo $group_slider->slider_group_status ?></td>
					<td>
						<button type="button" class="btn btn-primary">Cập nhật</button>
						<button type="button" class="btn btn-danger">Xoá</button>
					</td>
				</tr>
				<?php
					$number++; 
				} 
				?>
			</tbody>
		</table>
	</div>
	<script>
		jQuery(document).ready(function($){
            $("#slider-group").DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true,
                "pageLength"  : 10
            });
        });
	</script>
	<?php
	}
}

function create_slider_function(){
	if(isset($_GET['page']) && $_GET['page'] == 'create-itech-slider'){
    ?>
    <form method="post" accept-charset="utf-8">
    	<div class="col-sm-12">
    		<h3>Create Slider</h3>
    	</div>
    	<div class="col-sm-1">
    		<strong>Title Slider</strong>
    	</div>
    	<div class="col-sm-3">
    		<input type="text" name="title_slider" class="form-control" id="title_slider">
    	</div>
    	<div class="col-sm-1">
    		<strong>Alias Slider</strong>
    	</div>
    	<div class="col-sm-3">
    		<input type="text" name="shortcode_slider" class="form-control" id="shortcode_slider">
    	</div>
    	<div class="clearfix"></div>
    	<div class="col-sm-1">
    		<strong>Status Slider : </strong>
    	</div>
    	<div class="col-sm-2">
    		<input type="radio" name="status" value="0"> Tắt 
    		<input type="radio" name="status" value="1"> Bật 
    	</div>
		<div class="col-sm-1">
			<strong>Shortcode : </strong>
			<span id='shortcode_slider'>
				<strong></strong>
			</span>
		</div>
    	<div class="clearfix"></div>
    	<div class="col-sm-12"><button type="submit" class="btn btn-primary" name="submit-group-slider">Add Group Slider</button></div>
    </form>
    <?php
    }
}

function update_slider_function(){
	
}