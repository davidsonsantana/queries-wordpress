<?php 

function posts_for_current_author($query) {
	global $user_level;

	if($query->is_admin && $user_level < 5) {
		global $user_ID;
		$query->set('author',  $user_ID);
		unset($user_ID);
	}
	unset($user_level);

	return $query;
}
add_filter('pre_get_posts', 'posts_for_current_author');

?>


<!-- http://wordpress.org/support/topic/show-only-authors-posts-in-admin-panel-instead-of-all-posts -->
<!-- http://codex.wordpress.org/Roles_and_Capabilities#User_Level_to_Role_Conversion -->