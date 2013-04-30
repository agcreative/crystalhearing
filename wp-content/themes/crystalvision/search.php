<?php get_header(); ?>

<div class="body-wrap content-wrap search-wrap">

<div class="sidebar">
<?php wp_nav_menu(array(
	'menu' => 'Top Navigation',
	'container' => 'div',
	 'container_class' => 'side-nav', 
	)); 
	?>
</div>

	
			
		<div class="post" id="post-<?php the_ID(); ?>">
		
			<div class="breadcrumb">You are Here > Breadcrumb Placeholder</div>
			
			<h1>Search Results for: <?php the_search_query(); ?></h1>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	


			<div class="entry">
			
						<h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>
		

				<?php the_excerpt('More >'); ?>

<div class="clr"></div>

			</div>

		<?php endwhile; endif; ?>

		</div>
		



		
		</div>



<?php get_footer(); ?>
