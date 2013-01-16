<!DOCTYPE HTML>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Adamina' rel='stylesheet' type='text/css'>
	<link href="<?php bloginfo('template_directory'); ?>/favicon.ico" rel="icon">
	<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
		<![endif]-->
</head>
<body>

<section class="wrapper">
        	<header id="head">
				
				<?php wp_nav_menu(array('container'       => 'nav', 'menu' => 'Header Menu')); ?>					
					
					<a href="<?php bloginfo('wpurl'); ?>" title="home" id="logoPosition">
						<img src="<?php bloginfo('template_directory'); ?>/images/logo0.png" alt="<?php bloginfo('name'); ?>"  />
						<h1 id="h1Min"><?php bloginfo('name'); ?></h1>  
					</a>
			
				
			</header> <!-- fin HEADER -->
			
<section id="content">