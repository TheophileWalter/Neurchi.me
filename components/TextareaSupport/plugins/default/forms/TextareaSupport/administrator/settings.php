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
$settings = $component->getComSettings('TextareaSupport');
?>
<label><?php echo ossn_print('com:textareasupport:admin:settings:label:scripting:support');?></label><br />
<?php echo ossn_print('com:textareasupport:admin:settings:label:invalid:elements:description');?><br /><br />
<select name="scripting_and_svg">
 	<?php
	$scripting_and_svg_off = '';
	$scripting_and_svg_on = '';
	if($settings && $settings->scripting_and_svg == 'on'){
		$scripting_and_svg_on = 'selected';
	} else {
		$scripting_and_svg_off = 'selected';
	}
	?>
	<option value="off" <?php echo $scripting_and_svg_off;?>><?php echo ossn_print('ossn:admin:settings:off');?></option>
	<option value="on" <?php echo $scripting_and_svg_on;?>><?php echo ossn_print('ossn:admin:settings:on');?></option>
</select>
<br /><br />
<br />
<input type="submit" class="ossn-admin-button button-dark-blue" value="<?php echo ossn_print('save'); ?>"/>