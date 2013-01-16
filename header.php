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
        		<a href="<?php bloginfo('wpurl'); ?>" title="home" id="logoPosition0">
						<img src="<?php bloginfo('template_directory'); ?>/images/logo0.png" alt="<?php bloginfo('name'); ?>"  />
						<h1 id="h1Min"><?php bloginfo('name'); ?></h1>  
					</a>

				<?php wp_nav_menu(array('container'       => 'nav', 'menu' => 'Header Menu')); ?>					
				
			<section id="subHeader">
				<hgroup>
					<h1>web designer</h1>
					<h2>emmanuel samu</h2>
					
					<h3 id="slogan">
						Bienvenue sur le site d'un <strong>web designer</strong> qui a une passion pour l'<em>ergonomie</em> et les interfaces <em>propres</em>, <em>efficaces</em> &amp; <em>utilisables</em>. 
						 <br />
						<a href="<?php bloginfo('wpurl'); ?>/about" title="en savoir plus">En savoir plus sur moi&nbsp;?</a> ou <a href="<?php bloginfo('wpurl'); ?>/contact" title="contact moi">contact moi ici&nbsp;!</a>
					</h3>
					<a href="<?php bloginfo('wpurl'); ?>" title="home" id="home" class="link-header"><img src="<?php bloginfo('template_directory'); ?>/images/logoReflet.png" alt="webdesigner" id="logo" width="280px" height="184px" /> </a>
					<div class="clear"></div>
				</hgroup>
									
			</section>
			
			</header> <!-- fin HEADER -->
			
<section id="content">