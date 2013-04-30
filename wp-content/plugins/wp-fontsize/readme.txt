=== WordPress Font Size ===
Contributors: bobbravo2
Tags: font size, ajax, frontend, font size adjust, fontsize
Requires at least: 3.0.0
Tested up to: 3.4.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Stable tag: trunk


Adds BODY classes to allow CSS customize the size of various fonts, and layouts of a page. Uses AJAX to store state in session.
== Description == 

This plugin does one thing: adds the HTML, JS, and CSS to the page (minified, of course) 
to add a font size adjust to the top right of the viewport. Adds a class to the body HTML element to allow your CSS to make all the layout
and font size changes your heart desires!  

** How it works **
1.	Click on the fontsize buttons
1.	AJAX Request to validate & save the new size
1.	jQuery Changes the body class for instant results
1.	Subsequent page navigation maintains the size without any Flash of Wrong Sized Text (FOWST) 

== Installation ==
**Please Note**
The default installation of this plugin will have no *visible* effect on your theme. 
You must add css to specify the size of the font adjustments, this plugin only adds the
body class = font-size-{$number} to allow your CSS to do the tweaking.

Install using the Plugin Repository, then *add the following demo CSS:*
**Demo CSS:**
`.font-size-1
{
	font-size: 0.8em;
}
.font-size-2
{
	font-size: 0.9em;
}
.font-size-3
{
	font-size: 1em;
}
.font-size-4
{
	font-size: 1.2em;
}
.font-size-5
{
	font-size: 1.3em;
}
.font-size-6
{
	font-size: 1.5em;
}
.font-size-7
{
	font-size: 1.7em;
}`

== Frequently Asked Questions ==

= How do I customize the number of levels? =

See the plugin file: wp_fontsize.php and adjust the constants at the top of the class. See:
`const MAX_SIZE = 7;
const DEFAULT_SIZE  = 3;
const MIN_SIZE = 1;`

= How do I disable the including of the CSS? =
Look for the public method: `<?php wp_fontsize->footer();?>`
Inside of that method, you can comment out the parts of the plugin you'd like to disable, for example:
`
<?php function  footer () {
		ob_start(array(&$this, 'min'));
		$this->html();
		//This will disable the default CSS, you must apply your own for the widget to work properly
		//$this->css();
		$this->js();
		ob_end_flush();
	}
?>
`

== Screenshots ==

1. Clicking on the fontsize button increments or decrements the font-size-{$number} applied to the body of the page