<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
 
define('__TEXTAREA_SUPPORT__', ossn_route()->com . 'TextareaSupport/');
require_once __TEXTAREA_SUPPORT__ . 'vendors/htmlpurifier-4.12.0-lite/library/HTMLPurifier.auto.php';

/**
 * Initialize component
 *
 * @return void
 */
function com_textarea_support_init() {
		ossn_extend_view('ossn/site/head', 'js/textareasupport-language-selector');
		
		global $Ossn;
		$current_item_plugin = $Ossn->plugins['default']['user/fields/item'];
		$component = new OssnComponents();
		if($component->isActive('CustomFields') && $current_item_plugin == 'components/TextareaSupport/plugins/default/') {
			// if CustomFields component is enabled, it needs its own item handler !
			$Ossn->plugins['default']['user/fields/item'] = 'components/CustomFields/plugins/default/';
		}
		if(!com_textarea_support_tinymce_available()) {
			ossn_load_external_js('tinymce.min');
		}
		if(ossn_isAdminLoggedin()){
			ossn_register_com_panel('TextareaSupport', 'settings');
			ossn_register_action('admin/textarea_support/settings', __TEXTAREA_SUPPORT__ . 'actions/settings.php');
		}
		ossn_add_hook('textarea', 'purify', 'com_textarea_support_purify');
}

function com_textarea_support_tinymce_available() {
		global $Ossn;
		return array_search('tinymce.min', $Ossn->jsheadExternal['site']);
}

function com_textarea_support_purify($hook, $type, $return, $params) {
		$OssnComponents = new OssnComponents;
		$settings = $OssnComponents->getSettings('TextareaSupport');
		if($settings && $settings->scripting_and_svg == 'on') {
			return html_entity_decode($return);
		} else {
			$purify_config = HTMLPurifier_Config::createDefault();
			$purify_config->set('HTML.SafeIframe', true);
			$purify_config->set('URI.SafeIframeRegexp', '%^(https?:)?//(www\.youtube(?:-nocookie)?\.com/embed/|player\.vimeo\.com/video/)%');
			$def = $purify_config->getHTMLDefinition(true);
			$def->addAttribute('iframe', 'allowfullscreen', 'Bool');
			$purifier = new HTMLPurifier($purify_config);
			return $purifier->purify(html_entity_decode($return));
		}
}

ossn_register_callback('ossn', 'init', 'com_textarea_support_init');
		
