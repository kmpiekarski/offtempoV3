<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<!-- page.php -->
		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

                <div id="blog-sidebar" class="sidebar-right" style="position: absolute; right: 0px; top: 40px;">
				<?php //get_sidebar(); ?>
                </div>
				<?php //comments_template( '', true ); ?>
                
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>