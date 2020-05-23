<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license    OSSN License  https://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
define('Announcement', ossn_route()->com . 'Announcement/');
/**
 * Initialize the component
 *
 * @return void
 */
function announcement_init() {
		ossn_register_com_panel('Announcement', 'settings');
		if(ossn_isAdminLoggedin()) {
				ossn_register_action('announcement/save', Announcement . 'actions/settings.php');
		}
		if(ossn_isLoggedin()) {
				ossn_extend_view('ossn/js/head', 'announcement');
		}
}
/**
 * Announcement
 *
 * @return string
 */
function announcement() {
		$component = new OssnComponents;
		$settings  = $component->getSettings("Announcement");
		if(isset($settings->announcement) && !empty($settings->announcement)) {
				return ossn_plugin_view('announcement/message', array(
						'announcement' => $settings
				));
		}
}
ossn_register_callback('ossn', 'init', 'announcement_init');