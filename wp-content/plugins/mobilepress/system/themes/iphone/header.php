<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.1//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php if (is_home()) { bloginfo('name'); } ?><?php if (is_month()) { the_time('F Y'); } ?><?php if (is_category()) { single_cat_title(); } ?><?php if (is_single()) { the_title(); } ?><?php if (is_page()) { the_title(); } ?><?php if (is_tag()) { single_tag_title(); } ?><?php if (is_404()) { echo "Page Not Found!"; } ?></title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<meta name="generator" content="WordPress and MobilePress" />
		<meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
		
		
		<script type="text/javascript">
		jQuery(document).ready(function($){
				
			$('#menu-mobile-menu > li').click(function() {
			
				if($(this).find('ul').hasClass('active')) {
					
						$(this).find('ul').removeClass('active');
						$(this).removeClass('selected');
							
				} else {
											
						$('.active').not(this).toggleClass('active');
						$('.selected').not(this).toggleClass('selected');	
			
						$(this).find('ul').toggleClass('active');
						$(this).toggleClass('selected');
			
				}

			});
				
		});
		</script>
	</head>
	

	<body>
	
		<div id="headerwrap">
			
			<div id="header">
				<h1><a href="http://www.cvoh.ca/" title="CVOH"><?php bloginfo('name'); ?></a></h1>
				
			</div>
			
			<?php wp_nav_menu(array(
			'menu' => 'Mobile Menu',
			'container' => 'div',
			 'container_class' => 'mobile-nav', 
			)); 
			?>
			
		</div>
		