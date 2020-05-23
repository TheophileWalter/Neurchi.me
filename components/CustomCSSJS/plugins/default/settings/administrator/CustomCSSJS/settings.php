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
echo ossn_view_form('edit', array(
    'action' => ossn_site_url() . 'action/cssjs/edit',
    'component' => 'CustomCSSJS',
    'class' => 'cssjs-form',
), false);
?>
