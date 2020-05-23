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

$notif = $params['notification'];
$baseurl = ossn_site_url();
$user = ossn_user_by_guid($notif->poster_guid);
$group = ossn_get_group_by_guid($notif->subject_guid);

$user->fullname = "<strong>{$user->fullname}</strong>";
$img = "<div class='notification-image'><img src='{$baseurl}avatar/{$user->username}/small' /></div>";
$type = "<i class='fa fa-users fa-groupinvite'></i>";
if ($notif->viewed !== NULL) {
        $viewed = '';
} elseif ($notif->viewed == NULL) {
        $viewed = 'class="ossn-notification-unviewed"';
}
$url = ossn_group_url($group->guid);
$notification_read = "{$baseurl}notification/read/{$notif->guid}?notification=" . urlencode($url);
echo "<a href='{$notification_read}'>
	       <li {$viewed}> {$img} 
		   <div class='notfi-meta'> {$type}
		   <div class='data'>" . ossn_print("ossn:notifications:{$notif->type}", array($user->fullname, $group->title)) . '</div>
</div></li></a>';