<?php

/**
 * Template Name: Front 
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
is_front_page();
get_header(); ?>

		<div id="primary">
            <div id="slider-container">
                <ul id="slider">
                    <li>
					<?php
                        $args = array( 'post_type' => 'post_video', 'posts_per_page' => 1);
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            ?>
                            <div class="thumb-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><span style="color:#F00; text-shadow:#F60 1px 1px;">VIDEO DOCUMENT:</span> <?php the_title(); ?></a></div>
                            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'feature-slider' ); } ?></a>
                        <?php
                        endwhile;
                    ?>
                    </li>
                    
                    <li>
					<?php
                        $args = array( 'post_type' => 'post_video', 'posts_per_page' => 1, 'offset' => 1);
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            ?>
                            <div class="thumb-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><span style="color:#F00; text-shadow:#F60 1px 1px;">VIDEO DOCUMENT:</span> <?php the_title(); ?></a></div>
                            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'feature-slider' ); } ?></a>
                        <?php
                        endwhile;
                    ?>
                    </li>
                    
                    <li>
					<?php
                        $args = array( 'post_type' => 'post_audio', 'posts_per_page' => 1);
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            ?>
                            <div class="thumb-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><span style="color:#6CF; text-shadow:#9FF 1px 1px;">AUDIO RECORDING:</span> <?php the_title(); ?></a></div>
                            
                            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'feature-slider' ); } ?></a>
                        <?php
                        endwhile;
                    ?>
                    </li>
                    
                    <li>
					<?php
                        $args = array( 'post_type' => 'post_audio', 'posts_per_page' => 1, 'offset' => 1);
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            ?>
                            <div class="thumb-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><span style="color:#6CF; text-shadow:#9FF 1px 1px;">AUDIO RECORDING:</span> <?php the_title(); ?></a></div>
                            
                            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'feature-slider' ); } ?></a>
                        <?php
                        endwhile;
                    ?>
                    </li>
                </ul>
            </div>
			<div id="content" role="main">
            
            <div style="width:59%; float:left;">    
                <div id="front-video-thumbnail-container" class="white-containers" style="margin-bottom: 21px;">
                	
                	<h1 class="front-page"><a href="/videos">More Video Documents &rarr;</a></h1>
					<?php
                        $args = array( 'post_type' => 'post_video', 'posts_per_page' => 2, 'offset' => 2 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            ?><div class="medium-thumb">
                            <div class="thumb-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></div>
                            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'feature-thumb' ); } ?></a>
                        </div><?php
                        endwhile;
							wp_reset_query();?>
                
                    <div style="clear:both;"></div>
                </div><!--END front-video-thumbnail-container-->
            
            
                
				<div id="front-recordings-container" class="white-containers">
                	<h1 class="front-page"><a href="/recordings">More Live Recordings &rarr;</a></h1>
                	<ul>
                    <?php
                        $args = array( 'post_type' => 'post_audio', 'posts_per_page' => 4, 'offset' => 2 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            ?>
                        <li class="audio-row"><div class="audio-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></div><!--<br />
        <div class="single-post-timestamp"><?php //print the_time('l, F jS, Y') ?></div>--></li>
                    <?php endwhile; 
							wp_reset_query();?>
					</ul>
                
                </div><!--END front-blog-container-->
                
            </div>
                
            <div style="width:40%; float: right;"> 
                
				<div id="front-blog-container" class="white-containers recent-blog-posts" style="min-height: 432px;">
                	<h1 class="front-page"><a href="/blog">From the Weblog &rarr;</a></h1>
                
                    <?php query_posts('posts_per_page=8'); ?>
                    <ul>
                    <?php while (have_posts()) : the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a><br />
        <div class="single-post-timestamp"><?php print the_time('l, F jS, Y') ?></div></li>
                    <?php endwhile; 
							wp_reset_query();?>
					</ul>
                
                </div><!--END front-blog-container-->
			</div>
                
				<div id="front-tumblr-container" class="white-containers recent-blog-posts">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Front Widget Area')) : ?>
                    [ do default stuff if no widgets ]
                <?php endif; ?>
                </div><!--END front-blog-container-->
			</div><!-- #content -->
		</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>