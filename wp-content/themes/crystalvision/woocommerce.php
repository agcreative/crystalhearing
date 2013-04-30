<?php get_header(); ?>

<div class="body-wrap content-wrap product-wrap">

<div class="sidebar">
<?php wp_nav_menu(array(
	'menu' => 'Product Navigation',
	'container' => 'div',
	 'container_class' => 'side-nav', 
	)); 
	?>
</div>

				
		<div class="post" id="post-<?php the_ID(); ?>">
		
		<div class="breadcrumb"><?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?></div>

			<?php woocommerce_content(); ?>
			
			<div class="clr"></div>
			
		</div>



	
		


		
		</div>



<?php get_footer(); ?>
