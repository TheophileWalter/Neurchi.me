/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$(document).ready(function() {
	$('#open_create').click(function() {
		var timezone_offset_minutes = new Date().getTimezoneOffset();
		timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;
		// Timezone difference in minutes such as 330 or -360 or 0
		Ossn.PostRequest({
			url: Ossn.site_url + "action/client/timezone",
			params: 'client_time=' + timezone_offset_minutes,
			callback: function(return_data) {
				var client_timezone = return_data['data'];
				var select = $('.timezone-dropdown');
				var option = select.find("option:contains("+ client_timezone +")");
				var optionTop = option.offset().top
				var selectTop = select.offset().top;
				select.scrollTop(select.scrollTop() + (optionTop - selectTop));
				option.prop('selected', true)
			}
		});
	});
});
