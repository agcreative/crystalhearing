<?php get_header(); ?>

<div class="body-wrap content-wrap news-wrap">

<div class="social-share">
<span class='st_facebook' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span><span class='st_twitter' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span><span class='st_linkedin' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span><span class='st_email' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span><span class='st_plusone' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span><span class='st_pinterest' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
</div>

<div class="sidebar">
<?php dynamic_sidebar('News Widgets'); ?>
<?php dynamic_sidebar('Sidebar Widgets'); ?>
</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
		
		<div class="breadcrumb">You are Here > Breadcrumb Placeholder</div>

			<h1><?php the_title(); ?></h1>
			<span class="post-date"><?php the_time('F j, Y');?></span>
			




			<div class="entry">
			
			<?php // dynamic_sidebar('Content Widgets'); ?>

				<?php the_content(); ?>

<div class="clr"></div>

			</div>



		</div>
		


		<?php endwhile; endif; ?>
		
		</div>



<?php get_footer(); ?>