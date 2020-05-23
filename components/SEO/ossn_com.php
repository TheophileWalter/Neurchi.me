<?php
/**
 * Open Source Social Network
 *
 * @package	SEO Component
 * @author    	Daniel Teich <dnlteich86@gmail.com>
 * @copyright	Component SEO 2019 by Daniel Teich
 * @license  	General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link    		http://www.opensource-socialnetwork.org/
 */

define('SEO', ossn_route()->com . 'SEO/');

function seo_init() {
	ossn_register_com_panel('SEO', 'settings');
	ossn_extend_view('ossn/site/head','pages/SEO');
	if(ossn_isAdminLoggedin()){
		ossn_register_action('admin/SEO/settings', SEO . 'actions/speichern.php');		
	}	
}

ossn_register_callback('ossn', 'init', 'seo_init');
