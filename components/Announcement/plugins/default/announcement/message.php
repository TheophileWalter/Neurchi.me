$(document).ready(function(){
	var  announcement= <?php echo json_encode('<div class="announcement" style="text-align: justify;"> <div class="alert alert-danger"> <strong>'.ossn_print('announcement:title').'</strong> <p>'.nl2br($params["announcement"]->announcement).'</p> </div> </div>');?>;
	if($('.newsfeed-middle .ossn-wall-container').length){
		console.log(1);
    	console.log(announcement);
		$(announcement).insertAfter('.newsfeed-middle .ossn-wall-container');
	}
});