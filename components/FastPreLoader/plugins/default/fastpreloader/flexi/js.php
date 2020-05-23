//<script>
$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip({
		placement:'left',										  
	}); 
	$('.sidebar a').each(function(){
				$text = $(this).text();
				$(this).attr('title', $text);
				$(this).tooltip();
	});
	$('.sidebar .sub-menu a').each(function(){				  
				$href = $(this).attr('href');
				$text = $(this).text();
				$(this).parent().attr('title', $text);
				//Sidebar links isn't working as its not actually type of 'a' #4
				$(this).parent().attr('data-href-flexi', $href);
				$(this).parent().tooltip();
	});
	$(document).on('click', '#sidebar-toggle', function() {
		var $toggle = $(this).attr('data-toggle');
		if ($toggle == 0) {
			$(this).attr('data-toggle', 1);
			if($(document).innerWidth() >= 1300 && $('.ossn-page-loading-annimation').is(':visible')){
				$('.sidebar').addClass('sidebar-open-no-annimation');	
				$('.ossn-page-container').addClass('sidebar-open-page-container-no-annimation');
			} else {
				$('.sidebar').addClass('sidebar-open');
				$('.sidebar').removeClass('sidebar-close');
				$('.ossn-page-container').addClass('sidebar-open-page-container');
			}			
			$('.topbar .right-side').addClass('right-side-space');
			$('.topbar .right-side').addClass('sidebar-hide-contents-xs');
			$('.ossn-inner-page').addClass('sidebar-hide-contents-xs');
		}
		if ($toggle == 1) {
			$(this).attr('data-toggle', 0);
			
			$('.sidebar').removeClass('sidebar-open');
			$('.sidebar').removeClass('sidebar-open-no-annimation');
			
			$('.ossn-page-container').removeClass('sidebar-open-page-container');
			$('.ossn-page-container').removeClass('sidebar-open-page-container-no-annimation');
			$('.topbar .right-side').removeClass('right-side-space');
			$('.topbar .right-side').removeClass('sidebar-hide-contents-xs');
			$('.ossn-inner-page').removeClass('sidebar-hide-contents-xs');

			$('.topbar .right-side').addClass('right-side-nospace');
			$('.sidebar').addClass('sidebar-close');
			$('.ossn-page-container').addClass('sidebar-close-page-container');
		}
		var document_height = $(document).height();
		$(".sidebar").height(document_height);
	});
	var $chatsidebar = $('.ossn-chat-windows-long .inner');
	if($chatsidebar.length){
		$chatsidebar.css('height', $(window).height() - 45);
	}
	$(document).scroll(function() {
		$document_height = $(document).height();						
		$(".sidebar").height($document_height);
		
		if($chatsidebar.length){
			if ($(document).scrollTop() >= 50) {
				$chatsidebar.addClass('ossnchat-scroll-top');
				$chatsidebar.css('height', $(window).height());
			} else if ($(document).scrollTop() == 0) {
				$chatsidebar.removeClass('ossnchat-scroll-top');
				$chatsidebar.css('height', $(window).height() - 45);
			}
		}
	});
	if($(document).innerWidth() >= 1300){
		$('#sidebar-toggle').click();
		$('#sidebar-toggle').click();
	}
	//Sidebar links isn't working as its not actually type of 'a' #4
	$("body").on('click', '.sidebar-menu .menu-content .sub-menu li', function(e){
			e.stopPropagation();
			$data = $(this).attr('data-href-flexi');
			if(e.target !== e.currentTarget) return;
			if($data == 'javascript:void(0);'){
					$(this).find('a').click();
			} else {
					window.location = $data;
			}	
	});
});
$(document).ready(function() {
	   $(".ossn-page-loading-annimation").fadeOut("fast");
});