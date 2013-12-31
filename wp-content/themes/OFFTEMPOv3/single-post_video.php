<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven q
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
		<div id="primary">
			<div style="background:#000; width:920px; height:518px; padding: 40px 40px 0 40px;">
            
                    <div id="tabs" class="tabs-bottom">
                        <?php
							$video_part_1 = get_post_meta($post->ID, 'Video Pt. 1', $single);
							if($video_part_1) {
								global $wp_embed;
								$post_embed = $wp_embed->run_shortcode('<div id="tabs-1">[embed width="920"]'.$video_part_1.'[/embed]</div>');
								print $post_embed;
								$p1 = true;
							}
							
							$video_part_2 = get_post_meta($post->ID, 'Video Pt. 2', $single);
							if($video_part_2) {
								global $wp_embed;
								$post_embed = $wp_embed->run_shortcode('<div id="tabs-2">[embed width="920"]'.$video_part_2.'[/embed]</div>');
								print $post_embed;		
								$p2 = true;	
							}
							$video_part_3 = get_post_meta($post->ID, 'Video Pt. 3', $single);
							if($video_part_3) {
								global $wp_embed;
								$post_embed = $wp_embed->run_shortcode('<div id="tabs-3">[embed width="920"]'.$video_part_3.'[/embed]</div>');
								print $post_embed;	
								$p3 = true;		
							}
						?> 
                        <ul>
                            <?php if($p1 && $p2){ print '<li><a href="#tabs-1">Part 1</a></li>';} else {} ?>
                            <?php if($p2){ print '<li><a href="#tabs-2">Part 2</a></li>';} ?>
                            <?php if($p3){ print '<li><a href="#tabs-3">Part 3</a></li>';} ?>
                        </ul>
                </div>
				
            </div>
    
            <div class="white-containers" style="background:#000; color:#FFF; padding-bottom: 25px; margin-bottom: 25px;">
            	<div id="video-head-title" style="padding-top: 40px;"><?php the_title(); ?></div>
            </div>
            
			<div id="content" role="main">
            
			<h1 id="blog-title"><span id="super-title">A</span>Video Document</h1>
            
                    <div id="blog-sidebar" class="sidebar-right">
                                    
                        <?php 
                            $credits = get_post_meta($post->ID, 'Credits', $single);
                            if($credits) {
                                global $wp_embed;
                                $post_embed = $wp_embed->run_shortcode('
                        <div style="float:left; padding-bottom: 10px; margin-bottom: 18px;" class="white-containers recent-blog-posts"><h1 class="front-page">Credits</h1><div class="document-credits">'. wpautop($credits).'</div></div>');
                                print $post_embed;			
                            }
                            
                        ?>   
                                 
                        <?php 
                            $credits = get_post_meta($post->ID, 'Supplimental', $single);
                            if($credits) {
                                global $wp_embed;
                                $post_embed = $wp_embed->run_shortcode('
                        <div style="float:left; padding-bottom: 10px; margin-bottom: 18px;" class="white-containers recent-blog-posts"><h1 class="front-page">Supplemental Material</h1><div class="document-credits">'. wpautop($credits).'</div></div>');
                                print $post_embed;			
                            }
                            
                        ?>
						
						<?php get_sidebar('video'); ?>
                    </div>
				<?php while ( have_posts() ) : the_post(); ?>
                    <!--<nav id="nav-single">
    					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav><!-- #nav-single -->

					<?php get_template_part( 'content', 'video' ); ?>
					<?php if (function_exists('facebook_comments')) facebook_comments(); ?>
					<?php //comments_template( '', true ); ?>
					
				<?php endwhile; // end of the loop. ?>
                
                
			</div><!-- #content -->
            
            <div style="float:left; margin-right: 0px; margin-left: 26px;" class="white-containers">
                <h1 class="front-page">Recent Videos</h1>
                <?php //DISPLAYS RECENT VIDEOS WHIILE EXCLUDING THE CURRENT ONE
                    $args = array( 'post_type' => 'post_video', 'posts_per_page' => 3, 'post__not_in' => array($post->ID) );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                        ?><div class="video-single-thumb">
                        <div class="thumb-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></div>
                        <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'video-post-thumb' ); } ?></a>
                    </div><?php
                    endwhile;
                ?>
            </div><!--/ RECENT VIDEOS-->
		</div><!-- #primary -->

<?php get_footer(); ?>