<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

$component = new OssnComponents;
$settings = $component->getComSettings('HtmlSidebar');
?>

<label><?php echo ossn_print('com_htmlsidebar:admin:settings:mobile_sidebar:title');?></label>
<?php echo ossn_print('com_htmlsidebar:admin:settings:mobile_sidebar:note');?>
<select name="mobile_sidebar">
 	<?php
	$mobile_sidebar_off = '';
	$mobile_sidebar_on = '';
	if($settings && $settings->mobile_sidebar == 'on'){
		$mobile_sidebar_on = 'selected';
	} else {
		$mobile_sidebar_off = 'selected';
	}
	?>
	<option value="off" <?php echo $mobile_sidebar_off;?>><?php echo ossn_print('ossn:admin:settings:off');?></option>
	<option value="on" <?php echo $mobile_sidebar_on;?>><?php echo ossn_print('ossn:admin:settings:on');?></option>
</select>
<br />
 <div>
	<label><?php echo ossn_print('com_htmlsidebar:entertext'); ?></label>
	<textarea class="ossn-editor" name="html"><?php echo $settings->free_html;?></textarea>
 </div>
<br />
 <div>
 	<input type="submit" value="<?php echo ossn_print('save'); ?>" class="btn btn-success"/>
 </div>   
