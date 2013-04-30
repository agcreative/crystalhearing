<div id="footer">
		
		<?php dynamic_sidebar('Footer Widgets');?>
		
		<img class="wiens" src="<?php bloginfo('template_directory');?>/images/wiens.png" />
			
            <?php wp_nav_menu(array(
				'menu' => 'Footer Navigation',
				'container' => 'div',
				 'container_class' => 'foot-nav', 
				)); 
				?>
            
		</div>

	</div>

	<?php wp_footer(); ?>

	
</body>

</html>