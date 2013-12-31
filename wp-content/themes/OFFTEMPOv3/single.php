<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
			<h1 id="blog-title"><span id="super-title">the</span>OFF TEMPO BLOG</h1>
                    <div id="blog-sidebar" class="opacity-transition sidebar-right">
                        <?php get_sidebar('blog'); ?>
                    </div>
				<?php while ( have_posts() ) : the_post(); ?>


					<?php get_template_part( 'content', 'single' ); ?>
					<?php //if (function_exists('facebook_comments')) facebook_comments(); ?>
        
						<?php //comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>