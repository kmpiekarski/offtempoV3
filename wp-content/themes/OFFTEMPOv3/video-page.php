<?php

/**
 * Template Name: Video Page
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

		<div id="primary">
        	
					<?php
                        $args = array( 'post_type' => 'post_video', 'posts_per_page' => 1);
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            
						$video_part_1 = get_post_meta($post->ID, 'Video Pt. 1', $single);
						if($video_part_1) {
							global $wp_embed;
							$post_embed = $wp_embed->run_shortcode('<div style="background:#000; width:920px; padding: 40px 40px 0 40px;">[embed  a="t" width="920"]'.$video_part_1.'[/embed]</div>');
							print $post_embed;
							
							print '<div class="white-containers" style="background:#000; color:#FFF;"><div id="video-head-title"><a href="';
                            the_permalink();
                            print '"/> &uarr;&nbsp;&nbsp;';
							the_title();
							print '&nbsp;&nbsp;&uarr;</a></div><div style="width: 870px; margin: 0px 66px; text-align:center; height:70px;">';
							the_excerpt();
            				print '</div></div>';
						}
                        endwhile;
						
						// Reset Post Data
						wp_reset_postdata();
                    ?>
			<div id="content" role="main">
            
                
                <div id="front-video-thumbnail-container" style="width:950px; margin-top: 25px;" class="white-containers">
                	
                	<h1 class="front-page">Video Documents</h1>
					<?php
                        $args = array( 'post_type' => 'post_video', 'posts_per_page' => 99, 'offset' => 1 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            ?><div class="video-thumb">
                            <div class="thumb-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></div>
                            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'video-page-thumb' ); } ?></a>
                        </div><?php
                        endwhile;
						// Reset Post Data
						wp_reset_postdata();
                    ?>
                
                    <div style="clear:both;"></div>
                </div><!--END front-video-thumbnail-container-->
					<?php //get_template_part( 'content', get_post_format() ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>