<?php 

	add_action( 'after_setup_theme', 'es_setup' );
	add_action('widgets_init', 'es_sidebars');
	add_action('init', 'create_post_type');
	add_action('init', 'add_taxonomies');
	add_filter('comment_form_default_fields', 'enlever_url');
 
	function enlever_url($val) {
		$val['url'] = '';
	return $val;
	}

	if(! function_exists('add_taxonomies')) {
		function add_taxonomies() {
			register_taxonomy('techniques', 
			'works', 
			array(
				'label' => 'Techniques utilisées',
				'hierarchical' => true,
				'query_var' => true,
				'rewrite' => true
			)); 
		}
	}
	
	if( ! function_exists('es_sidebars')) {
	
		function es_sidebars() {
		
		register_sidebar(
			array(
				'id' => 'primary',
				'name' => __('Primary'),
				'description' => __('a short description'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'
			)
		);
		
		register_sidebar(
			array(
				'id' => 'secondary',
				'name' => __('Secondary'),
				'description' => __('a short description'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'
			)
		);
	
		}
	}
	
	if( ! function_exists('es_setup')) {
		function es_setup() {
			add_theme_support('automatic-feed-links');
			add_theme_support('post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );
			add_theme_support('post-thumbnails');
			
			register_nav_menu('header-menu', __('Header Menu', 'es'));
			
			if(function_exists('add_image_size')) {
				add_image_size('folio-work', 600, 400, true); // false = not cropped
			}
		}
	}
	
	if( ! function_exists('create_post_type')) {
		function create_post_type() {
			register_post_type('works',
				array(
					'labels' => array(
						'name' => __('Travaux'),
						'singular_name' => __('Travail')
					),
					'supports' => array('title', 'editor', 'thumbnail', 'post-formats'),
					'public' => true,
					'has_archive' => true
				)
			);
			
			register_post_type('social',
				array(
					'labels' => array(
						'name' => __('Réseaux sociaux'),
						'singular_name' => __('Réseau social')
					),
					'supports' => array('title', 'thumbnail', 'post-formats', 'custom-fields'),
					'public' => true,
					'has_archive' => true
				)
			);
			
			register_post_type('CV',
				array(
					'labels' => array(
						'name' => __('CV'),
						'singular_name' => __('CV')
					),
					'supports' => array('title', 'editor', 'thumbnail', 'post-formats'),
					'public' => true,
					'has_archive' => true
				)
			);
			
			register_post_type('skills',
				array(
					'labels' => array(
						'name' => __('Compétences'),
						'singular_name' => __('Compétence')
					),
					'supports' => array('title', 'thumbnail', 'custom-fields', 'post-formats'),
					'public' => true,
					'has_archive' => true
				)
			);
			
		}
	}