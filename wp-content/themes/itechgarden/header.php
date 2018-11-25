<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery-ui.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/dataTables.bootstrap.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/darktooltip.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom-itech.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/css/dataTables.bootstrap.min.css" />
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
	<?php wp_head(); ?>
</head>
<body class="home blog custom-background  sidebar-right header-normal title-none footer-normal cpo-sticky-header allegiant_pro_template">
	<div class="outer" id="top">
		<div id="topbar" class="topbar">
			<div class="container">
				<div id="social" class="social"></div>					
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<header id="header" class="header header-with-slider cpo-sticky">
		<div class="container">
			<div id="logo" class="logo">
				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					echo '<img src="'. esc_url( $logo[0] ) .'">';
				?>
			</div>
			<?php example_menu('primary-menu'); ?>
		</div>
	</header>
	<div id="slider" class="slider">
		
	</div>