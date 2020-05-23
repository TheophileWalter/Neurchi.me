<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team https://www.softlab24.com/contact
 * @copyright 2014-2016 SOFTLAB24 LIMITED
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
define('Feedback', ossn_route()->com . 'Feedback/');
require_once(Feedback . 'classes/Feedback.php');
function ossn_feedback_init() {
		ossn_register_com_panel('feedback', 'settings');
		
		if(ossn_isLoggedin()) {
				ossn_register_action('feedback/add', Feedback . 'actions/add.php');
		}
		if(ossn_isAdminLoggedin()) {
				ossn_register_action('feedback/delete', Feedback . 'actions/delete.php');
		}
		ossn_new_external_css('jquery.rateyo.min.css', '//cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css', false);
		ossn_new_external_js('jquery.rateyo.min.js', '//cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js', false);
		
		ossn_extend_view('css/ossn.default', 'feedback/css');
		
		$feedback = new Feedback;
		if(!$feedback->feedbackExists() && ossn_isLoggedin()) {
				ossn_extend_view('ossn/site/head', 'feedback/js');
				ossn_register_page('feedback', 'feedback_page_handler');
		}
}
function feedback_page_handler() {
		ossn_load_external_js('jquery.rateyo.min.js');
		ossn_load_external_css('jquery.rateyo.min.css');
		$title = ossn_print('feedback');
		$content = ossn_set_page_layout('newsfeed', array(
				'content' => ossn_plugin_view('feedback/add', $params)
		));
		echo ossn_view_page($title, $content);
}
ossn_register_callback('ossn', 'init', 'ossn_feedback_init');