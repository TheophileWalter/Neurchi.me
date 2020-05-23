//<script>
$(document).ready(function(){
	 var message_typing_send;
	 $(document).on('focus', '.friend-tab-item input', function(){
		$id = $(this).attr('id').split("-").pop();
		var $status = {
                url: Ossn.site_url+'action/message/typing/status/save?status=yes&subject_guid='+$id,
                action: true,
                callback: function(){}
        };
		Ossn.PostRequest($status);
		message_typing_send = setInterval(function(){
			Ossn.PostRequest($status);					 
		}, 3000);	
	 });
	 $(document).on('blur', '.friend-tab-item input', function(){
 		clearInterval(message_typing_send);
		$id = $(this).attr('id').split("-").pop();
		$status = {
                url: Ossn.site_url+'action/message/typing/status/save?status=no&subject_guid='+$id,
                action: true,
                callback: function(){}
        };
		Ossn.PostRequest($status);		
	});						   
});