			<?php
				$abbotsford = array("6045043277","abbotsford@cvoh.ca");
				$chilliwack = array("6047953900","chwkhearing@cvoh.ca");
				$langley = array("6045105142","langley@cvoh.ca");
				$mapleridge = array("6044663277","mapleridge@cvoh.ca");
				$northvan = array("6049833277","northvanchc@cvoh.ca");
				$squamish = array("18889333277","squamish@cvoh.ca");
				$whiterock = array("6045418599","whiterock@cvoh.ca");
				
				
				
		
				
				if(get_the_title() == "White Rock"){
					$number = $whiterock[0];
					$email = $whiterock[1];
				}
				if(get_the_title()  == "Chilliwack"){
					$number = $chilliwack[0];
					$email = $chilliwack[1];
				}
				if(get_the_title()  == "Abbotsford"){
					$number = $abbotsford[0];
					$email = $abbotsford[1];
				}
				if(get_the_title()  == "Langley"){
					$number = $langley[0];
					$email = $langley[1];
				}
				if(get_the_title()  == "Maple Ridge"){
					$number = $mapleridge[0];
					$email = $mapleridge[1];
				}
				if(get_the_title()  == "North Vancouver"){
					$number = $northvan;
					$email = $northvan[1];
				}
				if(get_the_title()  == "Squamish"){
					$number = $squamish[0];
					$email = $squamish[1];
				}
				
				
				
			?>

		
		<div id="footerwrap">
		
			<div id="nav-container">
				<ul>
					<?php if(is_page(array("White Rock","Chilliwack","Abbotsford","Langley","Maple Ridge","North Vancouver","Squamish"))){ ?>
						<li class="phone"><a href="tel:<?php echo $number; ?>">phone</a></li>
					<?php } else { ?>
						<li class="phone"><a href="<?php echo site_url(); ?>/mobile-contact/" title="Crystal Vision Toll Free Number">phone</a></li>
					<?php } ?>
					
					<li class="home"><a href="<?php echo get_option('home'); ?>/" title="Crystal Vision">home</a></li>
					
					<?php if(is_page(array("White Rock","Chilliwack","Abbotsford","Langley","Maple Ridge","North Vancouver","Squamish"))){ ?>
						<li class="mail"><a href="mailto:<?php echo $email; ?>" title="contact">mail</a></li>
					<?php } else { ?>
						<li class="mail"><a href="<?php echo site_url(); ?>/mobile-contact/" title="contact">mail</a></li>
					<?php } ?>
					
				</ul>
			</div>
			
			<div id="footer">			
				<p style="float: left;"><a href="?nomobile">View Full Version</a></p>
				<p style="float: right;"><a href="http://www.cvoh.ca/vision/" title="Crystal Vision">Crystal Vision</a></p>
				<br clear="all" />
			</div>
			

			
		</div>
	
	</body>
	<?php wp_footer(); ?>
</html>