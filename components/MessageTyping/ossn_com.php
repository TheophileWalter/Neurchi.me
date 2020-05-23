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
define('MessageTyping', ossn_route()->com . 'MessageTyping/');
ossn_register_class(array(
		'MessageTyping' => MessageTyping . 'classes/MessageTyping.php'
));
function message_typing_init() {
		ossn_extend_view('css/ossn.default', 'messagetyping/css');
		ossn_extend_view('js/opensource.socialnetwork', 'messagetyping/js');
		
		ossn_extend_view('js/OssnChat.Boot', 'messagetyping/check_status');
		if(ossn_isLoggedin()) {
				ossn_register_action('message/typing/status/save', MessageTyping . 'actions/status.php');
				ossn_register_callback('user', 'delete', 'message_typing_delete');
		}
}
function message_typing_delete($callback, $type, $params) {
		$user_guid 		 = $params['entity']->guid;
		if($user_guid){
			$message_typing  = new MessageTyping();
			$list			 = $message_typing->searchAnnotation(array(
								'type' => 'messagetypingstatus',
								'offset' => false,
								'wheres' => array(
										"a.owner_guid='{$user_guid}' OR a.subject_guid='{$user_guid}'",
								),
	    	));
			if($list){
				foreach($list as $item){
						$item->deleteAnnotation();
				}
			}
		}
}
ossn_register_callback('ossn', 'init', 'message_typing_init');