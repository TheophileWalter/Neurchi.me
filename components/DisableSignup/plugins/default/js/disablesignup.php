$(document).ready(function() {
	$('.home-left-contents').removeClass('col-md-6');
	$('.home-left-contents').addClass('col-md-11');
	$('.home-left-contents .description').css('text-align', 'center');
	$('.home-left-contents').next().remove();
});