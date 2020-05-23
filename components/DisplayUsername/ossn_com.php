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

function com_display_username_init(){
		$current_url = current_url();
		if (strpos($current_url, 'administrator/users') === false && strpos($current_url, 'administrator/unvalidated_users') === false) {
			ossn_add_hook('user', 'get', 'com_display_username_replace_fullname_by_username');
			ossn_add_hook('search', 'type:users', 'com_display_username_username_search_handler');
			ossn_register_page('friendpicker', 'com_display_username_friend_picker');
		}
		ossn_register_callback('component', 'enabled', 'com_display_username_compatibility_check');
}

function com_display_username_compatibility_check($event, $type, $params) {
	$incompatible_coms = array('AnonymousRegistration');
	if(in_array($params['component'], $incompatible_coms)) {
		ossn_trigger_message(ossn_print('com:displayusername:compatibility:error', array($params['component'])), 'error');
		$com = new OssnComponents;
		$com->DISABLE($params['component']);
	}
}

function com_display_username_replace_fullname_by_username($hook, $type, $return, $params){
		$return->fullname = $return->username;
		return $return;
}

function com_display_username_username_search_handler($hook, $type, $return, $params) {
		$users         = new OssnUser;
		$data          = $users->searchUsers(array(
				'wheres' => "u.username LIKE '%{$params['q']}%'"
		));
		$count         = $users->searchUsers(array(
				'wheres' => "u.username LIKE '%{$params['q']}%'",
				'count' => true
		));
		$user['users'] = $data;
		$search        = ossn_plugin_view('output/users', $user);
		$search .= ossn_view_pagination($count);
		if(empty($data)) {
				return ossn_print('ossn:search:no:result');
		}
		return $search;
}

function com_display_username_friend_picker() {
		header('Content-Type: application/json');
		if(!ossn_isLoggedin()) {
				exit;
		}
		$user    = new OssnUser;
		$friends = $user->getFriends(ossn_loggedin_user()->guid);
		if(!$friends) {
				return false;
		}
		$search_for = input('q');
		// allow case insensitivity with first typed in char
		$fc = mb_strtoupper(mb_substr($search_for, 0, 1,'UTF-8'), 'UTF-8');
		$search_For = $fc . mb_substr($search_for, 1, null, 'UTF-8');
		// show all friends with wildcard '*' in first place
		if($search_for == '*') {
			$search_for = '';
			$search_For = '';
		}
		$search_len = mb_strlen($search_for,'UTF-8');
		foreach($friends as $users) {
			$first_name_start = mb_substr($users->username, 0, $search_len, 'UTF-8');
			if($first_name_start == $search_for || $first_name_start == $search_For) {
				$p['first_name'] = $users->username;
				$p['last_name']  = '';
				$p['imageurl']   = ossn_site_url("avatar/{$users->username}/smaller");
				$p['id']         = $users->guid;
				$usera[]         = $p;
			}
		}
		echo json_encode($usera);
}

ossn_register_callback("ossn", "init", "com_display_username_init");
