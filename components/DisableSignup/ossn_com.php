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

function disable_signup_init(){
		ossn_unregister_action('user/register');
		ossn_extend_view('js/opensource.socialnetwork', 'js/disablesignup');
}
ossn_register_callback('ossn', 'init', 'disable_signup_init');
