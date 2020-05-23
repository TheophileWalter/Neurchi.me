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

$component = new OssnComponents;
$modes = array(
		'off',
		'on'
);
$scripting_and_svg  = input('scripting_and_svg');
if(in_array($scripting_and_svg, $modes)) {
	if($component->setSettings('TextareaSupport', array('scripting_and_svg' => $scripting_and_svg))) {
		ossn_trigger_message(ossn_print('ossn:admin:settings:saved'));
		redirect(REF);
	}
}
ossn_trigger_message(ossn_print('ossn:admin:settings:save:error'), 'error');
redirect(REF);