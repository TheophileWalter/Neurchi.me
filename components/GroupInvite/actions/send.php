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

$friends = input('friends-input');
$group_guid = input('group');

$users = explode(',', $friends);
$sender = ossn_loggedin_user();
if(!empty($friends)){
	foreach($users as $item){
			$friend = ossn_user_by_guid($item);
			//check again if user friend with user or not
			if($friend && $sender->isFriend($sender->guid, $friend->guid)){
						$notification = new OssnNotifications;
						$notification->add('groupinvite', $sender->guid, $group_guid, $group_guid, $friend->guid);
			}
	}	
}
ossn_trigger_message(ossn_print('groupinvite:sent'));
redirect(REF);