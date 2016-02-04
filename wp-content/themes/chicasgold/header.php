<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>

	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
	crossorigin="anonymous">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>

</head>
<body>
	<div class="wrapper">
		<header class="container">
		<div class="row">
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			<hr>
			<?php wp_nav_menu(array('menu' => 'Main', 'container' => 'nav'));?>
		</div>
		</header>	
