<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
	
	// Register Sidebar
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	
		// Register Sidebar
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Header Widgets',
    		'id'   => 'header-widgets',
    		'description'   => 'These are widgets for the header.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	
		// Register Sidebar
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer Widgets',
    		'id'   => 'footer-widgets',
    		'description'   => 'These are widgets for the footer.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    	// Register Sidebar
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Content Widgets',
    		'id'   => 'content-widgets',
    		'description'   => 'These are widgets for the content area.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    	// Register Sidebar
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'News Widgets',
    		'id'   => 'news-widgets',
    		'description'   => 'These are widgets for the news area.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	
	// Add Menu Support
	
	if (function_exists('add_theme_support')) {
		add_theme_support('menus');
	}
	
	
	// Add Theme support for post thumbnails
	
	/*
	the_post_thumbnail();                  // without parameter -> Thumbnail
	
	the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
	the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
	the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
	
	the_post_thumbnail( array(100,100) );  // Other resolutions	*/
	
	add_theme_support( 'post-thumbnails' ); 
	
	add_image_size( 'bucket-img', 225, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'slider', 960, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'portfolio', 800, 9999 ); //300 pixels wide (and unlimited height)
	
	//Custom Excerpts
	
	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
	function new_excerpt_more( $more ) {
		return '';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

?>