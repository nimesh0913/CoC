<?php

/* Removing Admin Toolbar */
	add_filter('show_admin_bar', '__return_false');
/* /Removing Admin Toolbar */

/* Adding Menu */
	function menu_theme_setup() {
		register_nav_menus( array( 
		'header' => 'Header menu', 
		'footer' => 'Footer menu' 
		) );
	}
	add_action( 'after_setup_theme', 'menu_theme_setup' );
/* /Adding Menu */	

/* Featured Image */
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 444, 444, true ); // default Featured Image dimensions (cropped)
	 
		// additional image sizes
		// delete the next line if you do not need additional image sizes
		//add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
	}
/* /Featured Image */

/* Styles */
	function coc_styles() {
		
		wp_enqueue_style( 'style1', get_template_directory_uri() . '/css/bootstrap.css',false,'1','all');
		
		wp_enqueue_style( 'style2', get_stylesheet_uri() );
		
		wp_enqueue_style( 'style3', get_template_directory_uri() . '\bootstrap\css\bootstrap.css',false,'1','all');
		
		wp_enqueue_style( 'style4', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css',false,'1','all');
		
		wp_enqueue_style( 'style5', get_template_directory_uri() . '/bootstrap/css/creative.css',false,'1','all');
		
		wp_enqueue_style( 'style6', get_template_directory_uri() . '/bootstrap/css/creative.min.css',false,'1','all');
				
	}
	add_action( 'wp_enqueue_scripts', 'coc_styles' );
/* /Styles */	
	
/* Scripts */		
	function coc_scripts() {
		
		wp_enqueue_script( 'script1', get_template_directory_uri() . '/bootstrap/js/jquery.js', array ( 'jquery' ), 1, true);		
		
		wp_enqueue_script( 'script2', get_template_directory_uri() . '/bootstrap/js/jquery.min.js', array ( 'jquery' ), 1, true);	
	}
	add_action( 'wp_enqueue_scripts', 'coc_scripts' );
/* /Scripts */

/* Custom Post Type */
	function custom_post_type1 (){
	
		$labels = array(
			'name' => 'Services',
			'singular_name' => 'Services',
			'add_new' => 'Add Item',
			'all_items' => 'All Items',
			'add_new_item' => 'Add Item',
			'edit_item' => 'Edit Item',
			'new_item' => 'New Item',
			'view_item' => 'View Item',
			'search_item' => 'Search Services',
			'not_found' => 'No items found',
			'not_found_in_trash' => 'No items found in trash',
			'parent_item_colon' => 'Parent Item'
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
			),
			'taxonomies' => array('category', 'post_tag'),
			'menu_position' => 5,
			'exclude_from_search' => false
		);
		register_post_type('services',$args);
	}
	add_action('init','custom_post_type1');
	
	
	function custom_post_type2 (){
	
		$labels = array(
			'name' => 'Works',
			'singular_name' => 'Works',
			'add_new' => 'Add Item',
			'all_items' => 'All Items',
			'add_new_item' => 'Add Item',
			'edit_item' => 'Edit Item',
			'new_item' => 'New Item',
			'view_item' => 'View Item',
			'search_item' => 'Search Works',
			'not_found' => 'No items found',
			'not_found_in_trash' => 'No items found in trash',
			'parent_item_colon' => 'Parent Item'
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
			),
			'taxonomies' => array('category', 'post_tag'),
			'menu_position' => 5,
			'exclude_from_search' => false
		);
		register_post_type('works',$args);
	}
	add_action('init','custom_post_type2');
/* /Custom Post Type */

/* Adding Widgets*/
	register_sidebar( array(
		'name' => 'Footer Sidebar 1',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
	register_sidebar( array(
		'name' => 'Footer Sidebar 2',
		'id' => 'footer-sidebar-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
	register_sidebar( array(
		'name' => 'Footer Sidebar 3',
		'id' => 'footer-sidebar-3',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
	register_sidebar( array(
		'name' => 'Footer Below 1',
		'id' => 'footer-below-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
/* /Adding Widgets*/
