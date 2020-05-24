<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Théophile Walter
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$refuse = new OssnWall;
$group = input('group');
$post = input('post');

if (ossn_get_group_by_guid($group)->owner_guid !== ossn_loggedin_user()->guid && !ossn_isAdminLoggedin()) {
    ossn_trigger_message(ossn_print('pending:refuse:error'), 'error');
    redirect(REF);
}
if ($refuse->deletePost($post)) {
    ossn_trigger_message(ossn_print('pending:refuse:success'), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('pending:refuse:error'), 'error');
    redirect(REF);
}
