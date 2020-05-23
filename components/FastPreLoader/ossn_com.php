<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
function remove_preloader_init() {
		//ossn_add_hook('page', 'load', 'remove_preloader');
		ossn_add_hook('halt', "view:themes/goblue/plugins/default/js/goblue", 'remove_preloader_js');
		//ossn_add_hook('halt', "view:themes/Flexi/plugins/default/js/goblue", 'remove_preloader_flexi_js');
		ossn_add_hook('halt', "view:themes/Awesome/plugins/default/js/goblue", 'remove_preloader_awesome_js');
}
function remove_preloader_awesome_js(){
		return ossn_plugin_view('fastpreloader/awesome/js');	
}
function remove_preloader_flexi_js(){
		return ossn_plugin_view('fastpreloader/flexi/js');	
}
function remove_preloader_js(){
		return ossn_plugin_view('fastpreloader/js');	
}
function remove_preloader($hook, $type, $return, $params){
		$replace = str_replace('<div class="sidebar ">', '<div class="sidebar sidebar-open-no-annimation sidebar-open">', $return);
		return $replace;
}
ossn_register_callback('ossn', 'init', 'remove_preloader_init');
