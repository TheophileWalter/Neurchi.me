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

function com_touch_punch_init() {
	if (ossn_isLoggedin()) {
		ossn_extend_view('ossn/site/head', 'js/jquery.ui.touch-punch.min.js');
	}
}

ossn_register_callback('ossn', 'init', 'com_touch_punch_init');
