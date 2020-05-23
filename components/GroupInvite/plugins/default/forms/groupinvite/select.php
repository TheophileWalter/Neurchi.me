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
 ?>
<p><?php echo ossn_print('groupinvite:widget:desc');?></p>
<div class="groupinvite">
	<input type="text" placeholder="<?php echo ossn_print('tag:friends'); ?>" name="friends-input" id="ossn-wall-friend-input" />
</div>
<input type="hidden" name="group" value="<?php echo $params['group']->guid;?>" />
<input type="submit" class="btn btn-success btn-sm" value="<?php echo ossn_print('groupinvite:invite');?>" />