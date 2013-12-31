<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" href="http://www.offtempo.com/_includes/css/offtempo.css" rel="stylesheet" media="screen" />

<title>O F F T E M P O . C O M (beta)</title>

</head>
<?php require('./../news/wp-blog-header.php'); ?>
<body>


    		<div id="page_body"> <span id="beta"><font color="#669900">b</font><font color="#006600">e</font><font color="#669900">t</font><font color="#006600">a</font></span>
                <div id="page_header">
					<?php include('../_includes/nav_bar.php'); ?>
                    <div id="tagline">music: recordings / news / reviews</div>
                    <div style="margin-left:420px; margin-top:10px;"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div>
                    
                </div><!--END OF HEADER-->
            
                <div id="page_contents">
                   
                    <div class="columns" id="column0">
                   
                        <div class="column0_header"></div>
                        
                        <div class="sub_post0">
                        
                        
                        <?php
							global $post;
							$postslist = get_posts('category_name=podcasts&showposts=7');
							foreach ($postslist as $post) :
							setup_postdata($post);
						?>
                         <br />
                        <h3><a href="<?php the_permalink(); ?>"rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> <?php the_title(); ?></a> </h3>
                        
                        <span class="post_subtext">
							 from: <?php the_author() ?> | <?php the_time('F jS, Y') ?>
                        </span>
						
						<?php the_content('nonsense'); ?>
 						<?php endforeach; ?>
                        
                        <div style="margin-left:125px;"><a href="http://www.offtempo.com/podcasts/">[More Podcasts]</a></div>
                       
                    
                    
                    </div>
                </div>

    

                <div class="clearfloat"></div>
            </div><!--END OF PAGE CONTENTS-->
            <div id="columns_footer"></div>
        </div>
        <div id="page_footer">
            <div style="margin:0px auto;">
                <?php include('../_includes/footer.php'); ?>
            </div>
        </div>
        
        <script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
			</script>
			<script type="text/javascript">
			try {
			var pageTracker = _gat._getTracker("UA-6633559-1");
			pageTracker._trackPageview();
			} catch(err) {}
        </script>
</body>
</html>
