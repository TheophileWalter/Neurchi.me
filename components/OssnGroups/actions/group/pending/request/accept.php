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
$accept = new OssnGroup;
$group = input('group');
$post = input('post');

if (ossn_get_group_by_guid($group)->owner_guid !== ossn_loggedin_user()->guid && !ossn_isAdminLoggedin()) {
    ossn_trigger_message(ossn_print('pending:accept:error'), 'error');
    redirect(REF);
}
if ($accept->acceptPost($post, $group)) {
    ossn_trigger_message(ossn_print('pending:accepted'), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('pending:accept:error'), 'error');
    redirect(REF);
}
