<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html xmlns:fb="http://ogp.me/ns/fb#">
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta property="og:title" content="<?php the_title(); ?>"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="<?php the_permalink(); ?>"/>
<meta property="og:image" content="http://dev.offtempo.com/wp-content/themes/OFFTEMPOv3/images/off-tempo-badge.png"/>
<meta property="og:site_name" content="OFF TEMPO"/>
<meta property="og:description" content="OFF TEMPO | documenting music in the NW underground since 2007"/>
<meta name="description" content="Multi-media archive project predominantly covering music in Seattle and other musical hotbeds of Northwestern Washington State.">
<meta name="keywords" content="off tempo, offtempo, videos, live shows, audio, recordings, live recordings, documentary, documentaries, culture, cultural reform">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="image_src" href="/wp-content/themes/OFFTEMPOv3/images/off-tempo-badge.png" />
<link rel="apple-touch-icon-precomposed" href="/wp-content/themes/OFFTEMPOv3/images/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/wp-content/themes/OFFTEMPOv3/images/apple-touch-icon-72x72.png" />
<link rel="stylesheet" href="/wp-content/themes/OFFTEMPOv3/css/tabs.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/wp-content/themes/OFFTEMPOv3/css/anythingslider.css" type="text/css" media="screen" />
<!--<link rel="stylesheet" href="/wp-content/themes/OFFTEMPOv3/css/print.css" type="text/css" media="print" />-->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!-- jQuery (required) -->
<!-- Optional plugins -->
<!--<script type="text/javascript" src="/wp-content/themes/OFFTEMPOv3/js/jquery.easing.1.2.js"></script>
<script type="text/javascript" src="/wp-content/themes/OFFTEMPOv3/js/swfobject.js"></script>-->


<?php
	$current_path=$_SERVER['REQUEST_URI'];
	//print $current_path;
	$check_url = strpos( $current_path, '/video/');
	/*print $check_url;*/
	if($check_url === '0') {
		print '<!--<script type="text/javascript" src="/wp-content/themes/OFFTEMPOv3/js/jquery.ui.tabs.min.js"></script>-->';
} ?>


<!--<script type="text/javascript" src="/wp-content/themes/OFFTEMPOv3/js/jquery.ui.widget.min.js"></script>-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/OFFTEMPOv3/js/jquery-ui-1.8.16.custom.js"></script>
<!-- Anything Slider -->
<script type="text/javascript" src="/wp-content/themes/OFFTEMPOv3/js/jquery.anythingslider.js"></script>
<!-- AnythingSlider optional extensions -->
<!--<script src="/wp-content/themes/OFFTEMPOv3/js/jquery.anythingslider.fx.min.js"></script>-->
<?php if(is_home() || is_front_page() ) {
	print '<script src="/wp-content/themes/OFFTEMPOv3/js/jquery.anythingslider.video.js"></script>';
} ?>
<!-- Older IE stylesheet, to reposition navigation arrows, added AFTER the theme stylesheet above -->
<!--[if lte IE 7]>
<link rel="stylesheet" href="css/anythingslider-ie.css" type="text/css" media="screen" />
<![endif]-->

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=236731136362951";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Required -->
<script type="text/javascript">
$(function(){
 $('#slider').anythingSlider(); // add any non-default options here
});

$(function() {
	$( "#tabs" ).tabs();
	$( ".tabs-bottom .ui-tabs-nav, .tabs-bottom .ui-tabs-nav > *" )
		.removeClass( "ui-corner-all ui-corner-top" )
		.addClass( "ui-corner-bottom" );
});
</script>
    
<style>
	#tabs { height: 561px; } 
	.tabs-bottom { position: relative; } 
	.tabs-bottom .ui-tabs-panel { height: 561px; /*overflow: auto;*/ } 
	.tabs-bottom .ui-tabs-nav { position: absolute !important; left: 0; bottom: 0; right:0; padding: 0 0.2em 0.2em 0; z-index: 100; } 
	.tabs-bottom .ui-tabs-nav li { margin-top: -2px !important; margin-bottom: 1px !important; border-top: none; border-bottom-width: 1px; }
	.ui-tabs-selected { margin-top: -3px !important; }
</style>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6633559-1']);
  _gaq.push(['_setDomainName', 'offtempo.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body <?php body_class(); ?>>
	<header id="branding" role="banner">
			<hgroup>
				<h1 id="site-title"><span style="font-size:24px; color:#FFF"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="/wp-content/themes/OFFTEMPOv3/images/offtempo.png" alt="SITE LOADING"></a></span></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
                
                
                <nav id="access" role="navigation">
                    <h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
                    <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
                    <div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
                    <div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
                    <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                    <?php 
						//For the count button
						if(function_exists('Count_Button')) {
							//print Count_Button();
						} ?>
                        
                        <div style="width: 285px; height: 24px; float: right; padding-top: 3px;">
                            <div style="float:left; width:124px;">
                            <a href="https://twitter.com/OFFTEMPO" class="twitter-follow-button" data-show-count="false">Follow @OFFTEMPO</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            </div>
                            <div style="float:left; width:85px; margin-left:18px;"><fb:like href="http://www.facebook.com/offtempo" send="false" layout="button_count" width="145" show_faces="false"></fb:like></div>
                        </div>
                    <div id="header-search">
                    <?php
                        // Has the text been hidden?
                        if ( 'blank' == get_header_textcolor() ) :
                    ?>
                        <div class="only-search<?php if ( ! empty( $header_image ) ) : ?> with-image<?php endif; ?>">
                        <?php get_search_form(); ?>
                        </div>
                    <?php
                        else :
                    ?>
                        <?php get_search_form(); ?>
                    <?php endif; ?>
                    </div>
                </nav><!-- #access -->
			</hgroup>


	</header><!-- #branding -->

<div id="page" class="hfeed">

	<div id="main">