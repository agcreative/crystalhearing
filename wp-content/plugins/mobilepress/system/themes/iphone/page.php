<?php get_header(); ?>
		
		<div id="contentwrap">
		
		<?php
			if (isset($_GET['comments'])) {
			
				if (have_posts()): while (have_posts()): the_post();
					comments_template();
				endwhile; endif;
				
			}
			elseif (isset($_GET['postcomment'])) {
			
				if (have_posts()): while (have_posts()): the_post();
					comments_template($file = '/postcomment.php');
				endwhile; endif;
			
			}
			else {
		?>
			
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
			
			<div id="infoblock">
			
				<h2><?php the_title(); ?></h2>
			
			</div>

			
			<div class="post">
				<?php the_content(); ?>
				<?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=Page %'); ?>
			</div>
			
			
			

			<?php endwhile; else: ?>
			

			<div id="infoblock">

				<h2>Page Not Found</h2>
			</div>
			
			<div class="post">

				<p>Sorry, The page you are looking for cannot be found!</p>
			</div>
			

			<?php endif; ?>
		
		<?php
		}
		?>
		
		</div>
		
<?php get_footer(); ?>
