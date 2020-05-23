<?php
/**
 * Homelancer Program/Software
 *
 * @package    	Homelancer Package for Ossn
 * @author     	Geocadin RA <ossn@homelancer.com>
 * @author_url 	http://www.homelancer.com/
 * @copyright  	2017 Homelancer.com
 * @license     General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link        http://www.opensource-socialnetwork.org/licence
*/
$en = array(
	'customcssjs' => 'Homelancer Custom CSS/JS',
	'cssjs:head_admin_css' => 'Admin Head CSS',
	'cssjs:head_admin_js' => 'Admin Head JS',
	'cssjs:head_css' => 'Head CSS',
	'cssjs:head_js' => 'Head JS',
	'cssjs:footer_css' => 'Footer CSS',
	'cssjs:footer_js' => 'Footer JS',
    'cssjs:remove' => '%s successfully removed.',
    'cssjs:update' => '%s update successful.',
    'cssjs:update:fail' => 'Failed to update %s',
	
    'cssjs:head:admin:title' => '<h3>Add custom Administrator CSS/JS to the &lt;head&gt;&lt;/head&gt; area</h3>',
    'cssjs:head:title' => '<h3>Add custom Non-Admin CSS/JS to the &lt;head&gt;&lt;/head&gt; area</h3>',
    'cssjs:footer:title' => '<h3>Add custom Non-Admin CSS/JS to the non-admin &lt;footer&gt;&lt;/footer&gt; area</h3>',
	'cssjs:css' => "<h4>CSS rules without the &lt;style&gt;&lt;/style&gt; tags. Example:</h4>
<pre style='background:#fff;border-color:#f9f9f9;'>
body {background:#ffffff;}
a{
  color:#c0ded;
 text-decoration:none;
}</pre>",
	
    'cssjs:js' => "<h4>Javascript codes without the &lt;script&gt;&lt;/script&gt; tags. Example:</h4>
<pre style='background:#fff;border-color:#f9f9f9;'>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-123456789-0', 'auto');
ga('send', 'pageview');</pre>",

	'cssjs:css:file' => "<h4>Upload CSS/stylesheet file wrapped in &lt;style&gt;&lt;/style&gt; tags.</h4>",
	'cssjs:js:file' => "<h4>Upload JS/script file wrapped in &lt;script&gt;&lt;/script&gt; tags.</h4>",

);
ossn_register_languages('en', $en); 