<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    	<div class="entry-content">
            <header class="entry-header">
                <?php if ( is_sticky() ) : ?>
                    <hgroup>
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        <h3 class="entry-format"><?php _e( 'Featured', 'twentyeleven' ); ?></h3>
                    </hgroup>
                <?php else : ?>
                <h1 style="font-size: 27px;"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                <?php endif; ?>
    
                <?php if ( 'post' == get_post_type() ) : ?>
                <div class="blog-meta">
                    <?php twentyeleven_posted_on(); ?>
                    <div id="social-buttons">
                        <div id="tweet-like"><?php echo tweetbutton();?></div>
                        <div id="eff-like"><?php if(function_exists('Count_Button')) {echo Short_Button();} ?></div>
                    </div>
                </div><!-- .entry-meta -->
                <?php endif; ?>
    
                <?php if ( comments_open() && ! post_password_required() ) : ?>
                <div class="comments-link">
                    <?php //comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'twentyeleven' ) . '</span>', _x( '1', 'comments number', 'twentyeleven' ), _x( '%', 'comments number', 'twentyeleven' ) ); ?>
                </div>
                <?php endif; ?>
            </header><!-- .entry-header -->
		
        
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<!--<div class="entry-summary">-->
			<?php the_excerpt(); ?>
		<!--</div><!-- .entry-summary -->
		<?php else : ?>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		<?php endif; ?>
        </div><!-- .entry-content -->
		

		<footer class="entry-meta">
			<?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
    
                /* translators: used between list items, there is a space after the comma */
                $tag_list = get_the_tag_list( '', __( ' ', 'twentyeleven' ) );
                if ( '' != $tag_list ) {
                    $utility_text = __( 'tagged: %2$s'/* by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.'*/, 'twentyeleven' );
                } elseif ( '' != $categories_list ) {
                    $utility_text = __( 'This entry was posted in %1$s ' /*by <a href="%6$s">%5$s</a>.Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' */);
                } /*else {
                    $utility_text = __( 'This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
                }*/
                
                printf(
                    $utility_text,
                    $categories_list,
                    $tag_list,
                    esc_url( get_permalink() ),
                    the_title_attribute( 'echo=0' ),
                    get_the_author(),
                    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
                );
            ?>
            <?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
    		
		<div id="social-buttons">
            <div id="tweet-like"><?php echo tweetbutton();?></div>
            <div id="eff-like"><?php if(function_exists('Count_Button')) {echo Short_Button();} ?></div>
        </div>
        </footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
