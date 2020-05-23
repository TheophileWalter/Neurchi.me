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

define('GroupInvite', ossn_route()->com . 'GroupInvite/');
/**
 * Initialize the invitation component
 *
 * return void
 */
function group_invite_init() {
		if(ossn_isLoggedin()) {
				ossn_register_action('groupinvite/send', GroupInvite . 'actions/send.php');
		}
		ossn_add_hook('group', 'widgets', 'group_inivite_widget', 1);
		ossn_extend_view('css/ossn.default', 'groupinvite/css');
		
		//notification	
		ossn_add_hook('notification:view', 'groupinvite', 'groupinvite_notification');
		ossn_add_hook('notification:add', 'groupinvite', 'groupinvite_notification_add_config');
}
/** 
 * Group invitation notification
 * 
 * @param $hook   string notification:view
 * @param $type   string groupinvite
 * @param $return string notification view element
 * @param #params array  config
 *
 * @return string
 */
function groupinvite_notification($hook, $type, $return, $params) {
		return ossn_plugin_view("groupinvite/notification", array(
				'notification' => $params
		));
}
/** 
 * Group invitation notification configuration
 * 
 * @param $hook   string notification:add
 * @param $type   string groupinvite
 * @param $return array  config
 * @param $params array  config
 *
 * @return array
 */
function groupinvite_notification_add_config($hook, $type, $return, $params) {
		$params["owner_guid"] = $params["notification_owner"];
		return $params;
}
/** 
 * Group invitation notification widget
 * 
 * @param $hook   string group
 * @param $type   string widgets
 * @param $return array  config
 * @param $params array  config
 *
 * @return array
 */
function group_inivite_widget($hook, $type, $module, $params) {
		if(isset($params['group']) && $params['group']->isMember(null, ossn_loggedin_user()->guid)) {
				$module[] = ossn_plugin_view("groupinvite/widget", $params);
		}
		return $module;
}
ossn_register_callback('ossn', 'init', 'group_invite_init');