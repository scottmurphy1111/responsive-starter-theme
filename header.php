<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<meta name="viewport" content="width=device-width">	

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_enqueue_script('loadup_scripts'); ?>

	<?php wp_head(); ?>

	
</head>

<body <?php body_class(); ?>>
	<div class="container row">
		<header role="banner" class="row">
			<div id="header-left" class="col span_4">
				<h1 class="logo col span_6"><span class="hide-text">Company Name</span><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" /></a></h1>
				<nav id="mobile" class="col span_6">
					<div id="toggle-bar">			        
				        <a class="navicon mtoggle" href="#"></a>
				    </div>
					<?php wp_nav_menu( array('menu'=> 'Main', 'container' => false, 'menu_id' => 'mobile-menu', 'depth' => 1));?>	
				</nav>
			</div>
			<div id="header-right" class="col span_8">
				
				<nav id="desktop">
					<?php wp_nav_menu( array('menu'=> 'Main', 'container' => false, 'depth' => 1));?>
				</nav>
			</div>
		</header><!-- header -->


	


	
	
	<main role="main" class="row">