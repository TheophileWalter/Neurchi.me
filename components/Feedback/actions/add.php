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
 $feedback = new Feedback;
 $text = input('feedback');
 $rate = input('rate');
 if($feedback->addFeedback($text, $rate)){
			ossn_trigger_message(ossn_print('feedback:added'));
			redirect('home');
 } else {
			ossn_trigger_message(ossn_print('feedback:add:failed'), 'error');
			redirect(REF);	 
 }