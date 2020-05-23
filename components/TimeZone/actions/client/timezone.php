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
header('Content-Type: application/json'); 
$timezone_offset_minutes = input('client_time');
// Convert minutes to seconds
$timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes * 60, false);
echo json_encode(array(
            "data" => $timezone_name,
));
exit;
