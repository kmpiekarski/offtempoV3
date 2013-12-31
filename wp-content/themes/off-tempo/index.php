<?php get_header(); ?>

	<div id="content-container" class="clearfloat"><!--BOTTOM SECTION-->
        
		
	<div id="front-list">
    <!--START PODCAST LOOP-->

<div style="overflow:hidden; display:block;">

	<a href="http://www.offtempo.com/category/live"><img src="<?php echo get_option('home'); ?>/wp-content/themes/off-tempo/images/new_live_recordings.png" alt="" height="54" /></a><!--"feature" IMAGE-->
                <?php query_posts("showposts=1&category_name=live"); ?>
                <?php while (have_posts()) : the_post(); ?>	
        
                <div class="title" id="live"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
                <div class="meta">[<?php the_time('j M Y') ?> <?php if(function_exists('the_views')) { the_views(); } ?>]</div>	
                <?php $values = get_post_custom_values("Headline");?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=/<?php
            $values = get_post_custom_values("Image"); echo $values[0]; ?>&w=300&h=200&zc=1&q=100"
            alt="<?php the_title(); ?>" class="left" width="300px" height="200px"  /></a>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Read the full story &raquo;</a>
                <?php endwhile; ?>
                
                <hr />
</div><!--END BLOCKYNESS-->
    
    
    <!--START VIDEO LOOP!-->
	
<div style="overflow:hidden;">

	<a href="http://www.offtempo.com/category/video/"><img src="<?php echo get_option('home'); ?>/wp-content/themes/off-tempo/images/video.png" alt="" height="47" /></a><!--"feature" IMAGE-->
                <?php query_posts("showposts=1&category_name=video"); ?>
                <?php while (have_posts()) : the_post(); ?>	
        
                <div class="title" id="video"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
                <div class="meta">[<?php the_time('j M Y') ?> <?php if(function_exists('the_views')) { the_views(); } ?>]</div>	
                <?php $values = get_post_custom_values("Headline");?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=/<?php
            $values = get_post_custom_values("Image"); echo $values[0]; ?>&w=300&h=200&zc=1&q=100"
            alt="<?php the_title(); ?>" class="left" width="300px" height="200px"  /></a>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Read the full story &raquo;</a>
                <?php endwhile; ?>
                
</div><!--END BLOCKYNESS-->


    <!--START HOLLOW EARTH LOOP!-->
	
<div style="overflow:hidden;">

	<a href="http://www.offtempo.com/category/her/"><img src="<?php echo get_option('home'); ?>/wp-content/themes/off-tempo/images/inside_our_hollow_earth.png" alt="" height="47" /></a><!--"feature" IMAGE-->
                <?php query_posts("showposts=1&category_name=HER"); ?>
                <?php while (have_posts()) : the_post(); ?>	
        
                <div class="title" id="HER"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
                <div class="meta">[<?php the_time('j M Y') ?> <?php if(function_exists('the_views')) { the_views(); } ?>]</div>	
                <?php $values = get_post_custom_values("Headline");?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=/<?php
            $values = get_post_custom_values("Image"); echo $values[0]; ?>&w=300&h=200&zc=1&q=100"
            alt="<?php the_title(); ?>" class="left" width="300px" height="200px"  /></a>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Read the full story &raquo;</a>
                <?php endwhile; ?>
                
</div><!--END BLOCKYNESS-->


<?php /*<hr />
    	<div style="overflow:hidden;">
                <img src="<?php echo get_option('home'); ?>/wp-content/themes/off-tempo/images/feature_story.png" height="65" alt="" /><!--"feature" IMAGE-->
                <?php query_posts("cat=-5,4,&paged=$page&posts_per_page=1"); ?><!--Changed to not show podcast if it's also a featured article-->
                <?php while (have_posts()) : the_post(); ?>	
        
                <div class="title" id="feature_story"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
                <div class="meta">[<?php the_time('j M Y') ?> <?php if(function_exists('the_views')) { the_views(); } ?>]</div>	
                <?php $values = get_post_custom_values("Headline");?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=/<?php
            $values = get_post_custom_values("Image"); echo $values[0]; ?>&w=300&h=200&zc=1&q=100"
            alt="<?php the_title(); ?>" class="left" width="300px" height="200px"  /></a>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Read the full story &raquo;</a>
                <?php endwhile; ?>
                
</div><!--END BLOCKYNESS-->    
*/?>

	<hr />
    


    
	</div><!--END "front-list" CLASS-->
		

	<?php include(TEMPLATEPATH . '/sidebar-front.php'); ?><!--SIDEBAR COLUMN-->

	</div><!--END "bottom" CLASS-->

<?php get_footer(); ?>
