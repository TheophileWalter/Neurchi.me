<section class="<?php echo $params['class'];?>">
	<a target="_blank" href="<?php echo $params['item']->site_url;?>">
			<div class="ad-title"><?php echo $params['item']->title;?></div>
			<div class="ad-link"><?php echo $params['item']->site_url;?></div>
			<img class="ad-image" src="<?php echo ossn_ads_image_url($params['item']->guid); ?>" />
			<p><?php echo $params['item']->description;?></p>
	</a>
</section>