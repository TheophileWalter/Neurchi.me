<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license    OSSN License  https://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$settings = $params['settings'];
?>
 <div>
 	<label><?php echo ossn_print('announcement:text');?></label>
    <?php 
		echo ossn_plugin_view('input/textarea', array(
				'name' => 'announcement',
				'value' => $settings->announcement,
		));
	?>		
 </div>
 <div class="margin-top-10">
 	<input type="submit" class="btn btn-success" value="<?php echo ossn_print('save');?>" />
 </div>
