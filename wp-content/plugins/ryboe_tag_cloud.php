<?PHP
/*
	Plugin Name: Ryboe Tag Cloud
	Plugin URI: http://www.ryboe.com
	Description: A quick and easy way to get a tag cloud up for your categories using WordPress Widgets
	Version: 1.02
	Author: Sean Sullivan
	Author URI: http://www.ryboe.com
*/

/*  Copyright 2007  Sean Sullivan  (email : seansulli@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function widget_ryboe_tag_cloud_init()
{
	// Check for the required API functions
	if ( !function_exists('register_sidebar_widget') || !function_exists('register_widget_control') )
		return;
	
	function widget_ryboe_tag_cloud_control()
	{
		$options = $newoptions = get_option('widget_ryboe_tag_cloud');
		if ( $_POST['tagcloud-submit'] ) {
			$newoptions['title'] = strip_tags(stripslashes($_POST['tagcloud-title']));
			$newoptions['slugs'] = $_POST['tagcloud-slugs'];
		}
		if ( $options != $newoptions ) {
			$options = $newoptions;
			update_option('widget_ryboe_tag_cloud', $options);
		}
		?>
		<div>
			<label for="tagcloud-title" style="line-height:35px;display:block;"><?php _e('Title:', 'widgets'); ?> <input type="text" id="tagcloud-title" name="tagcloud-title" value="<?php echo wp_specialchars($options['title'], true); ?>" /></label>
			<label for="tagcloud-slugs" style="line-height:35px;display:block;"><?php _e('Use Nice Category Links:', 'widgets'); ?> <input type="checkbox" id="tagcloud-slugs" name="tagcloud-slugs" <?php echo isset($options['slugs']) ? 'CHECKED': '' ?> /></label>
			<input type="hidden" name="tagcloud-submit" id="tagcloud-submit" value="1" />
		</div>
		<?PHP
	}
	
	function widget_ryboe_tag_cloud($args)
	{
		extract($args);
		global $wpdb;
		$versionInfo = explode('.',get_bloginfo('version'));
		if(($versionInfo[0] == 2 && $versionInfo[1] > 2) || $versionInfo[0] > 2){
			$result = $wpdb->get_results('SELECT t.term_id AS id, t.name AS name, t.slug AS slug, tt.count AS sum FROM '.$wpdb->terms.' t INNER JOIN '.$wpdb->term_taxonomy.' tt ON tt.term_id = t.term_id WHERE tt.taxonomy = \'category\' AND tt.count > 0', OBJECT);
		}
		else{
			$result = $wpdb->get_results('SELECT cat_ID as id, cat_name as name, category_nicename as slug, category_count as sum FROM '.$wpdb->categories.' WHERE category_count > 0', OBJECT);
		}
		$tag_cloud = array();
		$options = get_option('widget_ryboe_tag_cloud');
		$min = 100000;
		$max = 0;
		foreach($result as $row)
		{
			if($row->sum > $max)
				$max = $row->sum;
			if($row->sum < $min)
				$min = $row->min;
			$tag_cloud[strtolower($row->name)] = array('sum'=>$row->sum, 'slug'=>$row->slug, 'id'=>$row->id);
		}
		ksort($tag_cloud);
		if(count($tag_cloud) > 0)
		{
			function linkcloud(&$value, $key, $options)
			{
				$diff = $options[0];
				if($value == 0)
				{
					$value='';
					return;
				}
				if($diff !=0)
					$size_class = ($value['sum']/$diff);
				else
					$size_class = .4;
				
				switch($size_class)
				{
					case $size_class >= .95:
						$class = 'tier5';
						break;
					case $size_class >= .65:
						$class = 'tier4';
						break;
					case $size_class >= .25:
						$class = 'tier3';
						break;
					case $size_class >= .1;
						$class = 'tier2';
						break;
					default:
						$class = 'tier1';
				}
				$key = html_entity_decode($key);
				$link = isset($options[1]) ? get_bloginfo('url').'/category/'.$value['slug'].'/' : get_bloginfo('url').'?cat='.$value['id'];
				$value = <<<EOS
				<span class="$class"><a class="reltag" href="$link" title="{$value['sum']} posts tagged">$key</a></span>
EOS;
			}
			$diff = $max - $min;
			array_walk($tag_cloud, 'linkcloud', array($diff,$options['slugs']));
			$tag_cloud = implode(' ',$tag_cloud);
		}
		else
		{
			$tag_cloud = 'There are no tags associated with this blog';
		}
		
		$title = $options['title'];
		echo <<<EOS
		<style type="text/css">
			.tag_cloud
			{
				font-family: Arial;
				text-align: center;
				margin: 5px 0 15px 0;
			}
			.tag_cloud a
			{
				text-decoration:none;
			}
			.tag_cloud a:hover
			{
				text-decoration: none;
				border-bottom-width: 1px;
				border-bottom-style: dotted;
			}
			.tier5
			{
				font-weight: bold;
				font-size: 20px;
			}
			.tier4
			{
				font-weight: bold;
				font-size: 16px;
			}
			.tier3
			{
				font-size: 14px;
			}
			.tier2
			{
				font-size: 12px;
			}
			.tier1
			{
				font-size: 10px;
			}
		</style>
EOS;
		echo $before_widget;
		echo $before_title . $title . $after_title;
		echo '<div class="tag_cloud">'.$tag_cloud.'</div>';
		echo $after_widget; 
	}

	// Tell Dynamic Sidebar about our new widget and its control
	register_sidebar_widget(array('Ryboe Tag Cloud', 'widgets'), 'widget_ryboe_tag_cloud');
	register_widget_control(array('Ryboe Tag Cloud', 'widgets'), 'widget_ryboe_tag_cloud_control');
}	
// Delay plugin execution to ensure Dynamic Sidebar has a chance to load first
add_action('widgets_init', 'widget_ryboe_tag_cloud_init');

?>
