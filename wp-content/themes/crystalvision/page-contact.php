<?php 
/*
Template Name: Contact Page Template
*/
 ?>
 
<?php get_header(); ?>

<div class="body-wrap content-wrap">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="sidebar">
<?php the_content(); ?>
</div>


			
		<div class="post" id="post-<?php the_ID(); ?>">
		
		<div class="breadcrumb"><?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?></div>

			<h1><?php the_title(); ?></h1>


			<div class="entry">
			
			

				<?php echo do_shortcode('[gravityform id=2 name=ContactUs title=false]'); ?>

<div class="clr"></div>

			</div>



		</div>
		


		
		
		</div>
<?php endwhile; endif; ?>


<?php get_footer(); ?>
