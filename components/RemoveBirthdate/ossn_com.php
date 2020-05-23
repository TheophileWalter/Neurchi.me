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
function remover_birthdate_init(){
        ossn_add_hook('user', 'default:fields', 'remove_birthdate');
}
function remove_birthdate($hook, $type, $fields) {
        $toremove           = array(
                'birthdate'
        );
        $return             = ossn_remove_field_from_fields($toremove, $fields);  
        return $return;
}
ossn_register_callback('ossn', 'init', 'remover_birthdate_init', 1001);