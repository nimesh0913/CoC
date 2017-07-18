<!DOCTYPE HTML>
<html>
<head>

		<title><?php bloginfo('name'); ?> </title>
		
		<!-- Bootstrap Core CSS -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
		
		
	<?php wp_head(); ?>
</head>

<body>
	<header class = "site-header">
		<h1> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		
		<?php 
			wp_nav_menu(); 
		?>
	</header>