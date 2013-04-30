<?php 
/*
Plugin Name: WordPress FontSize Adjust 
Plugin URI: http://mycircletree.com/
Description: Adds Stateful Fontsize Adjustment Classes to the body of the Website 
Author: Circle Tree, LLC
Version: 0.6.1
Author URI: http://mycircletree.com/
*/ 

class wp_fontsize {
	const SESSION_KEY = 'wp_fontsize';
	const MAX_SIZE = 7;
	const DEFAULT_SIZE  = 3;
	const MIN_SIZE = 1;
	private $font_size;
	function  __construct () {
		$this->font_size = self::DEFAULT_SIZE;
		if ( ! isset($_SESSION )) session_start();
		if ( ! isset( $_SESSION[ self::SESSION_KEY ] ) ) 
			$this->setFontSize(self::DEFAULT_SIZE); 
		add_action('init', array($this, 'init'));
		add_action('wp_ajax_fontsize', array($this, 'ajax'));
		add_action('wp_ajax_nopriv_fontsize', array($this, 'ajax'));
	}
	function  init () {
		$js_vars = array(
				'ajaxurl'=>admin_url('admin-ajax.php'),
				'fontsize' => $this->getFontSize(),
				'nonce' => wp_create_nonce('wp_fontsize'),
		);
		wp_localize_script('jquery', 'wp_fontsize', $js_vars);
		wp_enqueue_script('jquery');
		add_action('wp_footer', array($this, 'footer'));
		add_filter('body_class', array($this, 'body_class'));
	}
	function  ajax () {
		check_ajax_referer('wp_fontsize', 'nonce');
		$size = (int) $_REQUEST['size'];
		echo $this->setFontSize($size);
		die;
	}
	static public function  min ($string) {
		return str_replace(array("\t","\r\n", "\n", "\r","\t"), '', $string);
	}
	/**
	 * Sets the body class for adjusting font size
	 * @param int $index font size index class number
	 */
	public function setFontSize($index) {
		if ($index > self::MAX_SIZE) $index = self::MAX_SIZE;
		elseif ($index < self::MIN_SIZE) $index = self::MIN_SIZE; 
		$_SESSION[ self::SESSION_KEY ] = $index;
		return $index;
	}
	public function getFontSize () {
		return $_SESSION[self::SESSION_KEY];
	}
	function  body_class ($classes_array) {
		$classes_array[] = 'font-size-' . $this->getFontSize();
		return $classes_array;
	}
	private function css () {  ?>
		<style>
.wp_fontsize_wrapper
{
	position: absolute;
	right: 0px;
	top: 0px;
	-moz-border-radius: 0 0 0 3px;
	-webkit-border-radius: 0 0 0 3px;
	-khtml-border-radius: 0 0 0 3px;
	border-radius: 0 0 0 3px;
	width: auto;
	height: auto;
	background-color: #FFFFFF;
	overflow: hidden;
	padding-left: 5px;
	padding-right: 2em;
	line-height: 2;
}
.wp_fontsize_wrapper LABEL
{
	font-size: 10pt;
}
.admin-bar .wp_fontsize_wrapper
{
	top: 30px;
}
.wp_fontsize_wrapper UL
{
	list-style: none;
	position: absolute;
	right: 0px;
	top: 0px;
	margin: 0;
	padding: 0;
}
.wp_fontsize_wrapper UL LI
{
	display: inline-block;
	padding: 0 0.3em;
	float: left;
	position: relative;
	left: 0px;
	top: 0.3em;
	cursor: pointer;
	line-height: 1.5;
	font-size: 12pt;
}
.wp_fontsize_wrapper UL LI:hover
{
	background-color: #CDCDCD;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-khtml-border-radius: 5px;
	border-radius: 5px;
}
	
	
		</style>
	<?php }
	private function html () {  ?>
		<div class="wp_fontsize_wrapper" id="wp_fontsize_wrapper">
		<label title="Adjust the font size of the website">Font Size:</label>
			<ul>
				<li id="wpFontMinus" class="minus">-</li>
				<li id="wpFontPlus" class="plus">+</li>
			</ul>
		</div>
	<?php }
	private function js () { ?>
		<script>
		var current_size = wp_fontsize.fontsize;
		jQuery(function($) {
			<?php //A named function is used in place of jQuery.ajaxSetup to avoid plugin conflicts; ?>
			function do_ajax (operator) {
				var new_size = current_size;
				if (operator == 'plus')
					new_size++;
				else if (operator == 'minus')
					new_size--;
				$.ajax({
	  				url: wp_fontsize.ajaxurl,
	  				global: false,
	  				data: {
	  					action: "fontsize",
	  					size: new_size,
	  					nonce: wp_fontsize.nonce
					},
					success: function  (data) {
						new_size = parseInt(data);
						$("body").removeClass("font-size-" + current_size).addClass("font-size-" + new_size);
						current_size = new_size;
					}
				});
			};
  			$("#wpFontMinus").click(function  () {
  				do_ajax('minus');
  				return false;
			});
  			$("#wpFontPlus").click(function  () {
  				do_ajax('plus');
  				return false;
			});
		});
		</script>	
	<?php } 
	function  footer () {
		ob_start(array($this, 'min'));
		$this->html();
		$this->css();
		$this->js();
		ob_end_flush();
	}
}
new wp_fontsize();