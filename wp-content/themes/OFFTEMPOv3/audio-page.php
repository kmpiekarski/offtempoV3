<?php

/**
 * Template Name: Audio Page
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
                        $args = array( 'post_type' => 'post_audio', 'posts_per_page' => 1);
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
            
                
                <h1 id="blog-title"><?php the_title(); ?></h1>
                
                <div id="front-video-thumbnail-container" style="width:950px;" class="white-containers">
                    <div style="height: 16px; margin-top: 8px; margin-left: 10px;">
                    	<div class="sort-buttons"><a href="?sort_by=title">Sorty By Title</a></div>
                    	<div class="sort-buttons"><a href="?sort_by=release">Sort By Release Date</a></div>
                    </div>
					<?php
						$sort_by = $_GET['sort_by'];
						if($sort_by == 'title'){					
							$args = array( 'post_type' => 'post_audio', 'posts_per_page' => 9999, 'order' => 'asc', 'orderby' => 'title' );
						}else /*($sort_by == 'release')*/ {
							$args = array( 'post_type' => 'post_audio', 'posts_per_page' => 9999, 'order' => 'dec', 'orderby' => 'date' );
						}
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        
                        <div class="audio-row">
                            <div class="audio-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></div>

        <div class="single-post-timestamp">Released on <?php print the_time('l, F jS, Y') ?></div>                            
							<div class="audio-tag-column">
							<?php
							/* translators: used between list items, there is a space after the comma */
								//$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
				
							/* translators: used between list items, there is a space after the comma */
							$tag_list = get_the_tag_list( '', __( ' ', 'twentyeleven' ) );
							if ( '' != $tag_list ) {
								$utility_text = __( '<span class="tag">%2$s</span>'/* by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.'*/, 'twentyeleven' );
							} elseif ( '' != $categories_list ) {
								$utility_text = __( 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
							} else {
								$utility_text = __( 'This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
							}
							
							printf(
								$utility_text,
								$categories_list,
								$tag_list
							);
						?>
                    	</div>
                        <div style="clear:both;"></div>
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