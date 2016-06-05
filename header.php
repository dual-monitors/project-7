<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php  wp_title('|', true, 'right'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- stylesheets should be enqueued in functions.php -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<div class="main-nav">
		<!-- Nav logo -->
		<?php $image = get_field('nav_logo') ?>
		<img src="<?php echo $image['sizes']['medium']?>">

		<button id="menu-btn"><i class="fa fa-bars"></i></button>

		<?php wp_nav_menu( array(
			'container' => false,
			'theme_location' => 'primary'
		)); ?>
	</div> <!-- /.container -->
</header><!--/.header-->
