<?php
/**
 * The Template for displaying all single AUDIO posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<style>
	.sidebar-audio {
		
	}
	.post_audio.type-post_audio {
		
	}
</style>

		<div id="primary">
        
        
			<div style="background:#000; width:920px; height:auto; padding: 40px 40px 0 40px; z-index: 1000; position: relative;">
            
                    	<?php
							$audio = get_post_meta($post->ID, 'audioplayer', $single);
							if($audio) {
								
								print '<div class="audio-player-container">';
								print '<div class="audio-player-title"></div>';
								global $wp_embed;
								$post_embed = do_shortcode('[audio src='.$audio.']');
								print '<div id="audio-player">' . $post_embed . '</div>';
								print '</div>';
								print '<br /><div id="download-recording">&gt; &nbsp; &nbsp;<a href="'. $audio . '" target="_new" />DOWNLOAD THIS RECORDING</a> &nbsp; &nbsp;&lt;</div>';
							}  ?>
            </div>
    
            <div class="white-containers" style="background:#000; color:#FFF; padding-bottom: 25px; margin-bottom: 25px;">
            	<div id="video-head-title" style="padding-top: 40px;"><?php the_title(); ?></div>
            </div>
            
            
			<div id="content" role="main">
            
			<h1 id="blog-title"><span id="super-title">A</span>Live Recording</h1>
            <!-- SHIITTTT-->

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
                    
                        <?php if(getCustomField('1')) { ?>
                            <div style="float:left; padding-bottom: 10px; margin-bottom: 18px;" class="white-containers recent-blog-posts">
                                <h1 class="front-page">Supplemental Material</h1>
                                <?php getCustomField('1'); ?>
                            </div>
                        <?php }?>
						<?php get_sidebar('audio'); ?>
                    </div>
                    
                    
					
				<?php while ( have_posts() ) : the_post(); ?>


					<?php get_template_part( 'content', 'audio' ); ?>
					<?php if (function_exists('facebook_comments')) facebook_comments(); ?>
        
						<?php //comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->
            <div style="float:left; margin-right: 0px; margin-left: 26px;" class="white-containers">
                <h1 class="front-page">Recent Videos</h1>
                <?php //DISPLAYS RECENT VIDEOS WHIILE EXCLUDING THE CURRENT ONE
                    $args = array( 'post_type' => 'post_video', 'posts_per_page' => 3, 'offset' => 1, 'post__not_in' => array($post->ID) );
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