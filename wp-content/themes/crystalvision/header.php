<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php wp_title();  ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/reset.css" type="text/css" />
    
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-5489273-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>

	
	<script type="text/javascript">
	
	jQuery(document).ready(function() {
	
		jQuery.fn.cleardefault = function() {
		return this.focus(function() {
			if( this.value == this.defaultValue ) {
				this.value = "";
			}
		}).blur(function() {
			if( !this.value.length ) {
				this.value = this.defaultValue;
			}
		});
	};
	jQuery(".clearit input, .clearit textarea, input.clearit").cleardefault();
	
	});
	
	</script>
	
	<script type="text/javascript" src="//use.typekit.net/cmp6jpe.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	


	
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="header">

		<div class="switch">
			Crystal Hearing | <a href="http://www.cvoh.ca/vision/" title="Crystal Vision">Crystal Vision</a>
		</div>		
	

		<a class="bbb" href="http://www.bbb.org/mbc/business-reviews/optical-goods/crystal-vision-and-hearing-centre-in-maple-ridge-bc-221315">BBB</a>
		

		<?php dynamic_sidebar('Header Widgets'); ?>
		
            <a class="logo" href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>
	

<?php wp_nav_menu(array(
	'menu' => 'Top Navigation',
	'container' => 'div',
	 'container_class' => 'nav', 
	)); 
	?>

			
		</div>
        
        
