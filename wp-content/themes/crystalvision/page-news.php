<?php 
/*
Template Name: News Page
*/
 ?>

<?php get_header(); ?>

<div class="body-wrap content-wrap news-wrap">

<div class="sidebar">
<?php dynamic_sidebar('News Widgets'); ?>
<?php dynamic_sidebar('Sidebar Widgets'); ?>
</div>


			
		<div class="post" id="post-<?php the_ID(); ?>">
		
		<div class="breadcrumb"><?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?></div>
		
		<h1><?php the_title();?></h1>
		
		<?php query_posts( 'cat=16&posts_per_page=5' ); ?>
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


			<div class="entry">
		

				<?php the_excerpt(); ?>
				
				<a href="<?php the_permalink(); ?>" class="readmore">Read More <i>&gt;</i></a>
				
			</div>	
				
				<?php endwhile; endif; ?>
				
				
				
				<?php wp_reset_query(); ?>

<div class="clr"></div>

			



		</div>
		



		
		</div>



<?php get_footer(); ?>