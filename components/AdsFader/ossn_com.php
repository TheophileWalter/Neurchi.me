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
define('__ADS_FADER__', ossn_route()->com . 'AdsFader/');

/**
 * Initialize AdsFader Component
 *
 * @return void;
 * @access private
 */
function com_ads_fader() {
		ossn_extend_view('css/ossn.default', 'css/adsfader');
		ossn_extend_view('js/opensource.socialnetwork', 'js/adsfader');
		ossn_extend_view('js/opensource.socialnetwork', 'js/vendors/imagesloaded.pkgd.min');
		ossn_add_hook('required', 'components', 'com_ads_fader_asure_requirements');
}

function com_ads_fader_asure_requirements($hook, $type, $return, $params) {
	$return[] = 'OssnAds';
	return $return;
}

ossn_register_callback('ossn', 'init', 'com_ads_fader');
