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
		
        
        <div style="float:left; padding-bottom: 10px; margin-bottom: 18px;" class="white-containers recent-blog-posts">
            <h1 class="front-page">Recent Blog Posts</h1>
        
            <?php query_posts('posts_per_page=6'); ?>
            <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a><br />
<div class="single-post-timestamp"><?php print the_time('l, F jS, Y') ?></div></li>
            <?php endwhile; 
                    wp_reset_query();?>
            </ul>    
        </div><!--END front-blog-container-->
        
        <div id="ad-1" class="ads">
        	<div id="ad-subtext">our records</div>
            <?php if(function_exists('wp_content_slider')) { wp_content_slider(); } ?>
        </div>
        
        <div id="front-recordings-container" class="white-containers" style="width:295px; margin-bottom: 18px;">
                <h1 class="front-page"><a href="/recordings">Live Recordings &rarr;</a></h1>
                <ul>
                <?php
                    $args = array( 'post_type' => 'post_audio', 'posts_per_page' => 4, );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                    <li class="audio-row" style="width: 257px;"><div class="audio-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></div><!--<br />
    <div class="single-post-timestamp"><?php //print the_time('l, F jS, Y') ?></div>--></li>
                <?php endwhile; 
                        wp_reset_query();?>
                </ul>
            
        </div><!--END front-blog-container-->
        
        <div style="float:left; padding-bottom: 10px; margin-bottom: 18px;" class="white-containers" >
            <h1 class="front-page">Recent Videos</h1>
            <?php //DISPLAYS RECENT VIDEOS WHIILE EXCLUDING THE CURRENT ONE
                $args = array( 'post_type' => 'post_video', 'posts_per_page' => 3, 'post__not_in' => array($post->ID) );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                    ?><div class="video-thumb" style="margin-left: 24px;">
                    <div class="thumb-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></div>
                    <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'video-page-thumb' ); } ?></a>
                </div><?php
                endwhile;
            ?>
        </div><!--/ RECENT VIDEOS-->
        
        <div id="secondary" class="widget-area white-containers" style="overflow: hidden; padding-left:18px; padding-bottom:5px; margin-bottom:18px;" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h1 class="front-page"><?php _e( 'Blog Archive', 'twentyeleven' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
        
                
<?php endif; ?>