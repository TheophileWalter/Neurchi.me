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

$name = input('groupname');
$desc = input('groupdesc');
$memb = input('membership');
$vali = input('validation');

$group = ossn_get_group_by_guid(input('group'));
if ($group->owner_guid !== ossn_loggedin_user()->guid && !ossn_isAdminLoggedin()) {
    ossn_trigger_message(ossn_print('group:update:fail'), 'error');
    redirect(REF);
}

$edit = new OssnGroup;
$access = array(
    OSSN_PUBLIC,
    OSSN_PRIVATE
);

if (in_array($memb, $access)) {
    $edit->data = new stdClass;
    $edit->data->membership = $memb;
}

if ($vali == '0' || $vali == '1') {
    if (!isset($edit->data)) {
        $edit->data = new stdClass;
    }
    $edit->data->validation = $vali;
    $accept_pending = $vali == '0';
}

if ($edit->updateGroup($name, $desc, $group->guid)) {

    // If group is updated without post validation, we accept all pending posts
    if (isset($accept_pending) && $accept_pending) {
        $wall = new OssnWall;
        $posts = $wall->GetPostByOwner($group->guid, 'group:pending', false, 'guid asc');
        foreach($posts as $post) {
            $group->acceptPost($post->guid, $group->guid);
        }
    }

    ossn_trigger_message(ossn_print('group:updated'));
    redirect("group/{$group->guid}");
} else {
    ossn_trigger_message(ossn_print('group:update:fail'), 'error');
    redirect(REF);
}
