<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
define('__HTML_SIDEBAR__', ossn_route()->com . 'HtmlSidebar/');

/**
 * Home sidebar initlize the component
 * 
 * return void
 */
function com_html_sidebar(){
	ossn_add_hook('newsfeed', "sidebar:right", 'com_html_widget');
	$component = new OssnComponents;
	$settings = $component->getComSettings('HtmlSidebar');
	if($settings && $settings->mobile_sidebar == 'on'){
		ossn_add_hook('newsfeed', "center:top", 'com_html_widget');
	}
    if (ossn_isAdminLoggedin()) {
		ossn_register_com_panel('HtmlSidebar', 'settings');	
        ossn_register_action('html/sidebar/save', __HTML_SIDEBAR__ . 'actions/save.php');
    }	
}
/**
 * Show a html on sidebar
 * 
 * return array
 */
function com_html_widget($hook, $tye, $return){
	$return[] = ossn_plugin_view('htmlsidebar/contents');
	return $return;
}
/**
 * Convert save data into html code
 *
 * @param string $text encoded html code.
 *
 * return void|string
 */
function com_html_sidebar_output($text = ''){
	if(!empty($text)){
		return html_entity_decode($text, ENT_QUOTES, 'utf-8');
	}
}
ossn_register_callback('ossn', 'init', 'com_html_sidebar');
