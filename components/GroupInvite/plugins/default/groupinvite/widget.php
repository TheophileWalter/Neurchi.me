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
 echo ossn_view_widget(array(
	'title' => ossn_print('groupinvite:widget:title'),
	'contents' => ossn_plugin_view('groupinvite/widget_inner', $params),
));		 
