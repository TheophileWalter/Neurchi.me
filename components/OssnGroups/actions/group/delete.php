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


$guid = input('guid');
$group = ossn_get_group_by_guid($guid);

if(($group->owner_guid === ossn_loggedin_user()->guid) || ossn_isAdminLoggedin()){
	// Before deleting group, delete all pending posts
	$wall = new OssnWall;
	$posts = $wall->GetPostByOwner($guid, 'group:pending', false, 'guid asc');
	foreach($posts as $post) {
		$wall->deletePost($post->guid);
	}
	// Then delete the group
	if ($group->deleteGroup($group->guid)) {
    	ossn_trigger_message(ossn_print('group:deleted'));
    	redirect();
	} 
}
ossn_trigger_message(ossn_print('group:delete:fail'), 'error');
redirect(REF);	
