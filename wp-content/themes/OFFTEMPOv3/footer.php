<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
			
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<div id="footer">

    <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
    <div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
    <div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
    <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
    <?php wp_nav_menu( array( 'theme_location' => 'Footer Nav 1' ) ); ?>
	<div id="footer-icon-links" class="footer-columns">
    	<ul>
            <li id="icon-rss"><a href="http://feeds.feedburner.com/offtempo" alt="Get the latest on everying cool.">Off Tempo RSS</a></li>
            <!--<li id="icon-rss"><a href="/video/feed/" alt="Get the latest on everying cool.">Video RSS</a></li>
            <li id="icon-rss"><a href="/recording/feed/" alt="Get the latest on everying cool.">Live Recordings RSS</a></li>-->
            <li id="icon-twitter"><a href="http://twitter.com/offtempo" alt="Follow offtempo on Twitter.">@offtempo</a></li>
            <li id="icon-facebook"><a href="http://facebook.com/offtempo" alt="'Like' us or don't.">facebook.com/offtempo</a></li>
            <li id="icon-tumblr"><a href="http://offtempo.tumblr.com" alt="Just in case.">offtempo.tumblr</a></li>
            <!--<li id="icon-flickr"><a href=""><span style="color:#0063dc;">flick</span><span style="color:#ff0084;">r</span> pool</a></li>-->
            <li id="icon-vimeo"><a href="http://vimeo.com/offtempo" alt="our video page">vimeo profile</a></li>
            <li id="icon-bandcamp"><a href="http://offtempo.bandcamp.com" alt="Part of the record label">offtempo.bandcamp</a></li>
            <li id="icon-pdf"><a href="http://zine.offtempo.com" alt="In Print">the Off Tempo Zine</a></li>
        </ul>
    </div>
	<div id="footer-icon-links" class="footer-columns" style="margin-right: 45px;">
    	<ul><li style="color:#CCC; font-weight:bold; text-decoration:underline;">NW Essensials</li>
            <li><a href="http://offtemporecords.com" style="color:#F3F; font-weight:bold; text-transform:uppercase;" alt="There's a record label">OFF TEMPO RECORD LABEL</a></li>
            <li><a href="http://hollowearthradio.org" alt="There's a record label" target="_new">Hollow Earth Radio</a></li>
            <li><a href="http://wizardsoftheghost.com" alt="Seattle champion cassette label" target="_new">Wizards of the Ghost</a></li>
            <li><a href="http://www.2020cycle.com" alt="Seattle's best bicycle shop. No joke." target="_new">20/20 Cycle</a></li>
            <li><a href="http://racersessions.com" alt="Improv Sundays in Seattle" target="_new">Racer Sessions</a></li>
            <li><a href="http://www.whatsupseattle.com" alt="Myke Pelly's cool online consolidation of Seattle related videos and posters. It's kind of like an Online Zine." target="_new">What's Up Seattle</a></li>
            <li><a href="http://cairocollection.blogspot.com/" alt="Expensive botique vintage clothes and occational shows" target="_new">Cairo</a></li>
            <li><a href="http://www.thestranger.com/" alt="Obnoxious stable" target="_new">The Stranger</a></li>
            <li><a href="http://www.marriagerecs.com/" alt="A record label in Portland" target="_new">Marriage</a></li>
            <li><a href="http://krecs.com" alt="Convergence" target="_new"><img src="http://cdn.shopify.com/s/files/1/0097/0772/t/2/assets/logo.png?1854" height="16" alt="K" /></a></li>
            <li><a href="http://lostsoundtapes.com" alt="Another champion of Seattle's cassette culture" target="_new">Lost Sound Tapes</a></li>
            <li><a href="http://www.yucontemporary.org/" alt="The future apex of contemporary arts" target="_new">YU</a></li>
            <li><a href="http://www.anacortesunknown.com/" alt="Phil's weird baby" target="_new"><i>Unknown</i></a></li>
            <li><a href="http://funkytonkrecords.com/" alt="A very big reason why Off Tempo exists. Thank you Tim Leingang." target="_new">Funkytonk Records</a></li>
        </ul>
    </div>
    <div id="footer-name-desc">
    	<img src="/wp-content/themes/OFFTEMPOv3/images/offtempo.png" width="50" style="float:left; margin-right:5px; margin-top:2px;">
        is a Seattle based music documention project and small record label. It's been capturing NW underground sounds since 2007.
        <?php //mailchimpSF_signup_form(); ?>
    </div>
</div>
<div id="terms">All songs posted at <a xmlns:dct="http://purl.org/dc/terms/" href="http://offtempo.com" rel="dct:source">offtempo.com</a> are the exclusive property of the respective recording artists. 
    <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" /></a> This <span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/MovingImage" rel="dct:type">work</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://offtempo.com" property="cc:attributionName" rel="cc:attributionURL">Off Tempo</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>. Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://offtempo.com" rel="dct:source">offtempo.com</a>. Permissions beyond the scope of this license may be available at <a xmlns:cc="http://creativecommons.org/ns#" href="http://offtempo.com/contact" rel="cc:morePermissions">http://offtempo.com/contact</a>.
    <p align="center"><br />Site by Off Tempo with consultation from Joel Morley at <a href="http://www.playtimecollective.com/" target="_blank">Playtime Collective</a>. Off Tempo and offtempo.com are &copy; Off Tempo, LLC</p>
    
</div>

<?php wp_footer(); ?>

</body>
</html>