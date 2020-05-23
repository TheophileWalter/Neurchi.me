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
function ossn_ReadMore_init() {
	ossn_extend_view('css/ossn.default', 'css/readmore');
	ossn_extend_view('js/opensource.socialnetwork', 'js/readmore');
}
ossn_register_callback('ossn', 'init', 'ossn_ReadMore_init');
