<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() )  ?> <?php wp_title(); ?></title>

<meta name="generator" content="<?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="description" content="Multi-media archive project predominantly covering music in Seattle and other musical hotbeds of Northwestern Washington State." />
<meta name="keywords" content="off tempo, offtempo, music, video, record reviews, record" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="icon" href="<?php echo get_option('home'); ?>/wp-content/themes/off-tempo/images/" />
<link rel="shortcut icon" href="<?php echo get_option('home'); ?>/wp-content/themes/off-tempo/images/" />



<link rel="stylesheet" href="<?php echo get_option('home'); ?>/_includes/jquery/simpletooltip/simpletooltip.css" type="text/css" media="screen" /><!--GRABS THE "simpletooltip.css" FILE-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script><!--GRABS THE LATEST jQUERY LIBRARY-->
<script type="text/javascript" src="<?php echo get_option('home'); ?>/_includes/jquery/dimensions_1.2/jquery.dimensions.js"></script>
<script type="text/javascript" src="<?php echo get_option('home'); ?>/_includes/jquery/simpletooltip/jquery.tooltip.execute.js"></script>
<script type="text/javascript" src="<?php echo get_option('home'); ?>/_includes/jquery/simpletooltip/jquery.tooltip.v.1.1.js"></script>

<link href="<?php echo get_option('home'); ?>/_includes/jquery/jquery.gallery.0.3/jquery.gallery.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo get_option('home'); ?>/_includes/jquery/jquery.gallery.0.3/jquery.gallery.0.3.js"></script>
<script type="text/javascript" src=""></script>



<script type="text/javascript">
	$(function(){

		$("#main-photo-slider").codaSlider();

	});
</script>


<script>
$('#id_of_gallery').gallery({
  interval: 5500,
  height: '400px',
  width: '500px'
});
</script>

<?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6633559-1']);
  _gaq.push(['_setDomainName', '.offtempo.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<!--<div style="width:100%; position:relative; border:#FFC solid; background-color:#FFC">Off Tempo is going to moved to a new server! There are still a few issues but if you notice anything, send a message to <a href="mailto:support@offtempo.com">support@offtempo.com</a>. Thanks!</div>-->
<div id="head" class="clearfloat">

<div class="clearfloat">
	<div id="logo" class="left">
	<a href="<?php echo get_option('home'); ?>/"><img src="<?php echo get_option('home'); ?>/images/offtempo-letters.png" width="150px" alt="" /></a>
    
    <a href="<?php bloginfo('rss2_url'); ?>" class="with-tooltip" title="RSS, 2.0"><img src="<?php echo get_option('home'); ?>/images/icons/rss.png" width="30" height="30" style="vertical-align:middle;" /></a>
    <a href="http://www.facebook.com/pages/Off-Tempo/96373383816" class="with-tooltip" title="Off Tempo: Facebook"><img src="<?php echo get_option('home'); ?>/images/icons/facebook.png" width="30" height="30" style="vertical-align:middle;" /></a>
    <a href="http://www.twitter.com/offtempo" class="with-tooltip" title="Off Tempo: Twitter"><img src="<?php echo get_option('home'); ?>/images/icons/twitter.png" width="30" height="30" style="vertical-align:middle;" /></a>
	<div id="tagline"><?php bloginfo('description'); ?>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFCCFF">b</font><font color="#FF99FF">e</font><font color="#FFCCFF">t</font><font color="#FF99FF">a</font></div>
	</div>

	<!--<div id="banner_ad">
	<img src="<?php /* echo get_option('home'); */ ?>/wp-content/themes/off-tempo/images/banners/wide.jpg" alt="" />
	</div>-->

</div>

<div id="navbar" class="clearfloat">

<ul id="page-bar" class="left clearfloat">

<li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
<!--<li><a href="<?php echo get_option('home'); ?>/category/featured/">Features</a></li>-->
<li><a href="<?php echo get_option('home'); ?>/category/her/">HER In-Studios</a></li>
<li><a href="<?php echo get_option('home'); ?>/category/video/">Videos</a></li>
<li><a href="<?php echo get_option('home'); ?>/category/live/">Live Recordings</a></li>
<!--<li><a href="<?php echo get_option('home'); ?>/category/record-reviews/">Record Reviews</a></li>-->


</ul>


</div>

</div>

<div id="page" class="clearfloat">