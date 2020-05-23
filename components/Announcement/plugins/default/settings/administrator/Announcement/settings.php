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
 
echo ossn_view_form('announcement/settings', array(
    'action' => ossn_site_url() . 'action/announcement/save',
	'params' => $params,
));