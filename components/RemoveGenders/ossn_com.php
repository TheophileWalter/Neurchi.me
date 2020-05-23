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
function remover_gender_init(){
        ossn_add_hook('user', 'default:fields', 'remove_gender');
		ossn_register_callback('action', 'load', 'replace_genders_male');
}
function replace_genders($callback, $type, $params){
		if($params['action'] == 'user/register' || $params['action'] == 'admin/add/user' || $params['action'] == 'profile/edit' || $params['action'] == 'admin/edit/user' ){
				ossn_set_input('gender', 'male');
		}
}
function remove_gender($hook, $type, $fields) {
        $toremove           = array(
                'gender'
        );
        $return             = ossn_remove_field_from_fields($toremove, $fields);  
        return $return;
}
ossn_register_callback('ossn', 'init', 'remover_gender_init', 1001);