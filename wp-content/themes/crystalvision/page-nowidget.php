<?php 
/*
Template Name: Static Page, no Content Widgets
*/
?>

<?php get_header(); ?>

<div class="body-wrap content-wrap">

<div class="sidebar">
<?php wp_nav_menu(array(
	'menu' => 'Top Navigation',
	'container' => 'div',
	 'container_class' => 'side-nav', 
	)); 
	?>
</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
		
		<div class="breadcrumb"><?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?></div>

			<h1><?php the_title(); ?></h1>


			<div class="entry">
			
	

				<?php the_content(); ?>

<div class="clr"></div>

			</div>



		</div>
		


		<?php endwhile; endif; ?>
		
		</div>



<?php get_footer(); ?>
