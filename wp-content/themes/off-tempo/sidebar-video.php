<div id="sidebar">


    <div id="sidebar-ads"><a href="http://offtemporecords.com/" target="_blank" ><img src="/images/ads/offtemporecords.jpg" alt="" width="300px" /></a></div>
    <div id="sidebar-ads"><a href="http://phoningitin.net/" target="_blank" ><img src="/images/ads/phoning_it_in.jpg" alt="" width="300px" /></a></div>
    <hr />
    

    
    <div id="record-reviews"><!--RECENT RECORDINGS SECTION-->
    	
            <img src="<?php echo get_option('home'); ?>/wp-content/themes/off-tempo/images/recent_recordings.png" width="280px" alt="" style="margin-left:10px;" />
        
            <?php query_posts("cat=5,-4,&paged=$page&posts_per_page=9"); $i = 1; ?><!--Changed to not show podcast if it's also a featured article-->
                
            <?php while (have_posts()) : the_post(); ?>
        <div style="float:left; margin: 3px;"><!--BEGIN RECENT RECORDINGS REVIEW GRID-->
            <div class="clearfloat">
            <?php $values = get_post_custom_values("Image");
            if (isset($values[0])) { ?>
              <a href="<?php the_permalink() ?>" rel="bookmark" class="with-tooltip" title="<?php the_title(); ?>"><!---->
            <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=/<?php
        $values = get_post_custom_values("Image"); echo $values[0]; ?>&w=85&h=85&zc=1&q=100"
            alt="<?php the_title(); ?>" width="85px" height="85px"  /></a>
              <?php } ?>
        
            </div><!--END CLEAR FLOAT-->
        </div>
	<?php endwhile; ?>
    </div><!--END RECENT RECORDINGS SECTION-->
    
    
    
    <div id="record-reviews"><!--RECORD REVIEW SECTION-->
    	
            <img src="<?php echo get_option('home'); ?>/wp-content/themes/off-tempo/images/record_reviews.png" width="250px" alt="" style="margin-left:10px;" />
        
            <?php query_posts("showposts=3&category_name=record-reviews"); $i = 1; ?>
                
            <?php while (have_posts()) : the_post(); ?>
        <div style="float:left; margin: 3px;"><!--BEGIN RECORD REVIEW GRID-->
            <div class="clearfloat">
            <?php $values = get_post_custom_values("Image");
            if (isset($values[0])) { ?>
              <a href="<?php the_permalink() ?>" rel="bookmark" class="with-tooltip" title="<?php the_title(); ?>"><!---->
            <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=/<?php
        $values = get_post_custom_values("Image"); echo $values[0]; ?>&w=85&h=85&zc=1&q=100"
            alt="<?php the_title(); ?>" width="85px" height="85px"  /></a>
              <?php } ?>
        
            </div><!--END CLEAR FLOAT-->
        </div>
	<?php endwhile; ?>
    </div><!--END RECORD REVIEW SECTION-->
      
      
      
       <div id="sidebar-ads"><a href="http://www.hollowearthradio.org/home" target="_blank" ><img src="/images/ads/her-1.jpg" alt="" width="300px" /></a></div>



<div id="sidebar-middle" class="clearfloat"> 

</div>



</div>