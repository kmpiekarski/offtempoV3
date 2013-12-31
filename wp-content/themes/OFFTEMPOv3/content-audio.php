<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 72px;">

	<div class="entry-content">
        <header class="entry-header">
            <!--<h1 style="font-size: 27px;"><?php the_title(); ?></h1>-->
        
            <!--<div class="single-post-timestamp"><?php print the_time('l, F jS, Y') ?></div>-->
            <?php if ( 'post' == get_post_type() ) : ?>
            <!--<div class="blog-meta">
                <?php twentyeleven_posted_on(); ?>
            </div>--><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->
		<?php the_content(); ?>
        <?php print '&mdash;' . get_the_author(); ?>
        <div class="single-post-timestamp"><?php print the_time('l, F jS, Y') ?></div>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<div id="social-buttons">
            <div id="tweet-like"><?php echo tweetbutton();?></div>
            <div id="eff-like"><?php if(function_exists('Count_Button')) {echo Short_Button();} ?></div>
        </div>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ' ', 'twentyeleven' ) );
			if ( '' != $tag_list ) {
				$utility_text = __( 'tagged: %2$s'/* by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.'*/, 'twentyeleven' );
			/* elseif ( '' != $categories_list ) {
				$utility_text = __( 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			} else {
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
			}
		?>
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-meta -->
    
    <nav id="nav-below">
        <h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
        <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous Recording', 'twentyeleven' ) ); ?></span>
        <span class="nav-next"><?php next_post_link( '%link', __( 'Next Recording<span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
    </nav><!-- #nav-single -->
    
	<?php //comments_template( '', true ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
