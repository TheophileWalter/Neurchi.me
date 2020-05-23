<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
?>
<div>
	<label><?php echo ossn_print('feeback:desc');?></label>
    <textarea name="feedback"></textarea>
</div>
<div>
	<label><?php echo ossn_print('feeback:rate');?></label>
    <div class="feedback-rate"></div>
</div>
<div class="maring-top-10">
	<input class="btn btn-primary" type="submit" value="<?php echo ossn_print('feedback:submit');?>" />
</div>
<input type="hidden" name="rate" class="rate" />
<script>
	$(document).ready(function(){
			$(".feedback-rate").rateYo({
				ratedFill: '#DE9D43',
				fullStar: true,
				readOnly: false,
				onSet: function(rating, p){
						$('.rate').val(rating);
				},
		  	});						   
	});
</script>