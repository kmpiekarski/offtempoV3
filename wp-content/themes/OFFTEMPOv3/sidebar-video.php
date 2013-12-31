<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>	
		
        
		
        
        <div id="ad-1" class="ads">
        	<div id="ad-subtext">our records</div>
            <?php if(function_exists('wp_content_slider')) { wp_content_slider(); } ?>
        </div>
        <div class="opacity-transition">
            <div style="float:left; padding-bottom: 10px; width:295px;margin-bottom: 18px;" class="white-containers recent-blog-posts">
                <h1 class="front-page">Recent Blog Posts</h1>
            
                <?php query_posts('posts_per_page=3'); ?>
                <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a><br />
    <div class="single-post-timestamp"><?php print the_time('l, F jS, Y') ?></div></li>
                <?php endwhile; 
                        wp_reset_query();?>
                </ul>    
            </div><!--END front-blog-container-->
            
            <div id="front-recordings-container" class="white-containers" style="width:295px;">
                	<h1 class="front-page"><a href="/recordings">Live Recordings &rarr;</a></h1>
                	<ul>
                    <?php
                        $args = array( 'post_type' => 'post_audio', 'posts_per_page' => 4 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            ?>
                        <li class="audio-row" style="width: 257px;"><div class="audio-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></div><!--<br />
        <div class="single-post-timestamp"><?php //print the_time('l, F jS, Y') ?></div>--></li>
                    <?php endwhile; 
							wp_reset_query();?>
					</ul>
                
                </div><!--END front-blog-container-->
            
        </div>
<?php endif; ?>