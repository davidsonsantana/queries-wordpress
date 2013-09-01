<?php
	 $args = array(
	   'cat' => '3',
	   'post_type' => 'post',
	   'posts_per_page' => 3,
	   'post__not_in' => get_option('sticky_posts'),
	   'category__not_in' => array('15', '113'),
	   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
	);

	query_posts($args);

while (have_posts()) : the_post(); ?>

	<li>
		<div class="image">
			<a href="#">&nbsp;</a>
		</div>
		<div class="info">
			<h3><a href="#">Titulo</a></h3>
			<p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</a></p>
		</div>
	</li>

<?php endwhile; ?>

<?php

wp_reset_query();  // Restore global post data

?>