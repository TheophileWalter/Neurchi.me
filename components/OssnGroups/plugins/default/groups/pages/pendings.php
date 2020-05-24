<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Théophile Walter
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$posts = new OssnWall;
$count = $posts->GetPostByOwner($params['group']->guid, 'group:pending', true);
$posts = $posts->GetPostByOwner($params['group']->guid, 'group:pending');
if (empty($posts)) {
    echo '<div class="ossn-group-no-requests">' . ossn_print('no:pendings') . '</div>';
} else {
	echo '<div class="col-md-7 margin-top-10" style="float:inherit;"><div class="group-wall"><div class="user-activity">';
    foreach ($posts as $post) {
		if ($params['display_all'] || (!$params['display_all'] && $post->poster_guid == $params['user'])) {

			$post->type = 'group';
			$post->pending = true;
			
			$vars = ossn_wallpost_to_item($post);
			//selecting a CLOSED group like MYSITE/group/123/ gives warning #663
			if(!empty($vars) && is_array($vars)){ 
				$vars['ismember'] = $params['ismember'];
				echo ossn_wall_view_template($vars);
			}
			?>
			<div class="request-controls">
					<?php
						if ($params['display_all']) {
							echo ossn_plugin_view('output/url', array(
									'text' => ossn_print('pending:accept'),
									'href' =>  ossn_site_url("action/group/pending/accept?group={$params['group']->guid}&post={$post->guid}", true),
									'class' => 'btn btn-primary',
							));
							echo '&nbsp;';
							echo ossn_plugin_view('output/url', array(
									'text' => ossn_print('pending:refuse'),
									'href' =>  ossn_site_url("action/group/pending/refuse?group={$params['group']->guid}&post={$post->guid}", true),
									'class' => 'btn btn-danger',
							));
						}
					?>	
			</div>
		<?php
		}
	}
	echo '</div></div></div>';
	//echo ossn_view_pagination($count);
}
