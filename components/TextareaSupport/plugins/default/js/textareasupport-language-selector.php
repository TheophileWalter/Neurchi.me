<script>
<?php
	$current_lang = ossn_site_settings('language');
	if(ossn_isLoggedin()) {
		$user = ossn_loggedin_user();
		if($user->language) {
			$current_lang = $user->language;
		}
	}
?>
$(document).ready(function() {
	$("[class*='textarea-language-']").hide();
	$('.textarea-language-<?php echo $current_lang; ?>').show();
});
</script>