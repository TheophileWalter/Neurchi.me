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
 $guid = input('guid');
 $feedback = ossn_get_object($guid);
 if($feedback && $feedback->deleteObject()){
			ossn_trigger_message(ossn_print('feedback:deleted'));
			redirect(REF);
 } else {
			ossn_trigger_message(ossn_print('feedback:deleted:failed'), 'error');
			redirect(REF);	 
 }