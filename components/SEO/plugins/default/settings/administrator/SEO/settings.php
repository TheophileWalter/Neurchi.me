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
 
echo ossn_view_form('administrator/settings', array(
    'action' => ossn_site_url() . 'action/admin/SEO/settings',
    'component' => 'SEO',
	'params' => $params,
    'class' => 'ossn-admin-form'	
), false);
