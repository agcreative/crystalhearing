<?php get_header(); ?>

<div class="slider">

<a class="promo" href="<?php bloginfo('home'); ?>/trade-in-days-promotion/">Trade in Days</a>

<?php
if( function_exists('FA_display_slider') ){
    FA_display_slider(159);
}
?>

</div>

<div class="body-wrap home-wrap" id="body-wrap">

<div class="sidebar">

<?php dynamic_sidebar('Sidebar Widgets'); ?>



</div>





	
	<!--Start Buckets-->
	
	<div class="buckets">

	<?php query_posts('category_name=buckets&posts_per_page=6&order=ASC'); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="bucket">
	
	<div class="bucket-img">
	<a href="<?php the_field('page-target');?>"><?php the_post_thumbnail('bucket-img');?></a>
	</div>
	
	<h3><a href="<?php the_field('page-target');?>"><?php the_title(); ?></a></h3>
	
	<?php the_content(); ?>
	
	<a class="readmore" href="<?php the_field('page-target');?>">More <em>&gt;</em></a>
	
	</div>
	
	<?php endwhile; ?>
	
	<?php endif; ?>
	
	<div class="clr"></div>

	</div>
	
	<!--END BUCKETS-->
	
	<div class="clr"></div>
	
	
	<!--START THE TABBED AREA-->
	
	<div class="tab-content">
	
	<?php get_a_post('141'); ?>
	
	<?php the_content(); ?>
	
	</div>
	
	<!--END THE TABBED AREA-->
	
	<!--START PRODUCT LOGOS-->
	

	
	<div class="clr"></div>
	
</div>


</div>

<div class="logos-block">
<img src="<?php bloginfo('template_directory'); ?>/images/hearing-logos.jpg" />
</div>

<!--END PRODUCT LOGOS-->

<?php get_footer(); ?>