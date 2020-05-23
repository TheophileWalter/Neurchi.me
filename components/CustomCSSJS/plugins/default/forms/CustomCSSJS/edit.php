<?php
/**
 * Homelancer Program/Software
 *
 * @package    	Homelancer Package for Ossn
 * @author     	Geocadin RA <ossn@homelancer.com>
 * @author_url 	http://www.homelancer.com/
 * @copyright  	2017 Homelancer.com
 * @license     General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link        http://www.opensource-socialnetwork.org/licence
*/
$params=cssjs('form');
?>
<label><?php echo ossn_print('cssjs:head:admin:title'); ?> </label>
<br/>

<label><?php echo ossn_print('cssjs:css'); ?></label>
<textarea class="pre" name="head_admin_css"><?php echo $params['head_admin_css'];?></textarea>
<br/>
<label><?php echo ossn_print('cssjs:js'); ?></label>
<textarea class="pre" name="head_admin_js"><?php echo $params['head_admin_js'];?></textarea>
<br/>
<hr>

<label><?php echo ossn_print('cssjs:head:title'); ?> </label>
<br/>
<label><?php echo ossn_print('cssjs:css'); ?></label>
<textarea class="pre" name="head_css"><?php echo $params['head_css'];?></textarea>
<br/>
<label><?php echo ossn_print('cssjs:js'); ?></label>
<textarea class="pre" name="head_js"><?php echo $params['head_js'];?></textarea>
<br/>
<hr>

<br/>
<input type="submit" class="ossn-admin-button button-dark-blue" value="<?php echo ossn_print('save'); ?>"/>
