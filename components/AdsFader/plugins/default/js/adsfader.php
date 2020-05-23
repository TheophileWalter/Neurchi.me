function comAdsFaderAdsRotator(maxHeight){
	var $active = $('#adsrotator .active');
	var $next   = ($active.next().length > 0) ? $active.next() : $('#adsrotator section:first');
	$next.css('z-index', 2); //move the next image up the pile
	  
	$active.fadeOut(1500, function(){ //fade out the top image
		$active.css('z-index', 1).show().removeClass('active'); //reset the z-index and unhide the image
		$('#adsrotator section').css('position', 'absolute'); // reset position back to absolute
		$('.ossn-ad-item .ossn-widget .widget-contents').css('padding', 10);
		$next.css('z-index', 3).addClass('active'); //make the next image the top one
		$next.find('a').css('display', 'block');
		// since the widget-contents background height won't fit accordingly with position:absolute
		// we need to set it manually to the height of the largest ad plus a little bottom headroom
		$('.ossn-ad-item .ossn-widget .widget-contents').css('height', maxHeight + 30);
     });
}

$(document).ready(function(){
	// fix topbar priority preventing ads overlapping dropdowns
	if($('.topbar').length && $('.topbar').css('z-index') < 4) {
		$('.topbar').css('z-index', 4);
	}
	var comAdsFaderMaxHeight = 0;
	// temporarely hide first ad until max height calculation is done
	$('#adsrotator section:first a').css('opacity', 0);

	$('#adsrotator').imagesLoaded( function() {
		$('section').each(function(index) {
			if($(this).outerHeight() > comAdsFaderMaxHeight) {
				comAdsFaderMaxHeight = $(this).outerHeight();
			}
		});

		// calculation done - reset first ad to css we need for rotating
		$('#adsrotator section:first a').css('display', 'none');
		$('#adsrotator section:first a').css('opacity', 1);
		$('.ossn-ad-item .ossn-widget .widget-contents').css('padding', 0);

		comAdsFaderAdsRotator(comAdsFaderMaxHeight);
		// run every 30s
		setInterval(function() {
			comAdsFaderAdsRotator(comAdsFaderMaxHeight);
		}, 30000);
	});
})
