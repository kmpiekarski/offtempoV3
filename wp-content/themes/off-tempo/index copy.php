<?php get_header(); ?>

	<div id="content-container" class="clearfloat"><!--BOTTOM SECTION-->
        
		
	<div id="front-list">
    
    
                <img src="<?php echo get_option('home'); ?>/wp-content/themes/off-tempo/images/feature.png" width="331px" height="50px" alt="" /><!--"feature" IMAGE-->
                <?php query_posts("showposts=1&category_name=featured"); ?>
                <?php while (have_posts()) : the_post(); ?>	
        
                <div class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
                <div class="meta">[<?php the_time('j M Y') ?> <?php if(function_exists('the_views')) { the_views(); } ?>]</div>	
                <?php $values = get_post_custom_values("Headline");?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
            <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=/<?php
            $values = get_post_custom_values("Image"); echo $values[0]; ?>&w=300&h=275&zc=1&q=100"
            alt="<?php the_title(); ?>" class="left" width="300px" height="275px"  /></a>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read the full story &raquo;</a>
                <?php endwhile; ?>
                
    
    
	<img src="<?php echo get_option('home'); ?>/wp-content/themes/off-tempo/images/podcasts.png" alt="" style="border:0px;" />
	
    
<!--START PODCAST LOOP-->
    
	<?php
      $page = (get_query_var('paged')) ? get_query_var('paged') : 1; 
      query_posts("cat=5,-4,&paged=$page&posts_per_page=5"); ?><!--Changed to not show podcast if it's also a featured article-->
	
	<?php while (have_posts()) : the_post(); ?>	<!--"podcast" LOOP-->

	<div class="clearfloat">
	<div class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
	<div class="meta">[<?php the_time('j M Y') ?> <?php if(function_exists('the_views')) { the_views(); } ?>]</div><!--DATE-->
	
	<div class="spoiler">
	<?php	$values = get_post_custom_values("Image");
	if (isset($values[0])) { ?>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><!--THUMBNAIL HYPERLINK-->
	<img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=/<?php
$values = get_post_custom_values("Image"); echo $values[0]; ?>&w=150&h=150&zc=1&q=100"
alt="<?php the_title(); ?>" class="left" width="150px" height="150px"  /></a><!--THUMBNAIL FUNCTION-->
      <?php } ?>

	<?php the_excerpt(); ?><!--PODCAST EXCERPT FUNCTION-->
	</div><!--END "spoiler" CLASS-->

	</div><!--END "clearfloat" CLASS-->
		
      <?php endwhile; ?> <!--END "podcast" LOOP-->

	<div class="navigation">
		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
			else { ?>

			<div class="right"><?php /* next_posts_link('Next Page &raquo;') */?><a href="http://www.offtempo.com/category/podcasts/">All Live Recordings</a></div>
			<!--<div class="left"><?php /* php previous_posts_link('&laquo; Previous Page') */?></div>-->
			<?php } ?>

	</div><!--END "navigation" CLASS-->
	
	</div><!--END "front-list" CLASS-->
		

	<?php get_sidebar(); ?><!--SIDEBAR COLUMN-->

	</div><!--END "bottom" CLASS-->

<?php get_footer(); ?>
