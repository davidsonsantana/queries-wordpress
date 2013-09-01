<?php /* Template Name: Título do modelo de página */

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="content" class="site-content" role="main">

		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<h2 class="page-title center"><?php the_title(); ?></h2>
		  
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

		<?php endwhile; ?>

	</div><!-- #content -->

<?php get_footer(); ?>