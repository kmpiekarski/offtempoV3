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
		
        
        
        
        <div id="secondary" class="widget-area white-containers" style="overflow: hidden; padding-left:18px; padding-bottom:5px; margin-bottom:18px;" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-6' ) ) : ?>

				<aside id="archives" class="widget">
					<h1 class="front-page"><?php _e( 'Blog Archive', 'twentyeleven' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
        
                
<?php endif; ?>