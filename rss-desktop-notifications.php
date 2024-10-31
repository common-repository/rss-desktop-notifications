<?php 
	/*
	Plugin Name: RSS to desktop notifications
	Plugin URI: http://grabthatfeed.com/wordpressPlugin
	Description: This plugin allows you to more easily subscribe visitors to your RSS feed, without them even having to know what RSS is. Instead of using an RSS reader, your visitors can choose to receive Chrome desktop notifications whenever a new post is published on your RSS feed. Each notification links to your page. In order not to overload your visitors, the default interval for checking your feed is a few hours, and any user can set it to a lower of higher rate.
	Author: D. Anderson
	Version: 2.0
	Author URI: http://grabthatfeed.com
	*/
	
	
	
function rssdn_admin() {
	include('rss-desktop-notifications-admin.php');
}

function rssdn_admin_actions() {
	add_options_page("RSS Desktop Notifications", "RSS Desktop Notifications", 1, "rss-desktop-notifications", "rssdn_admin");
}

add_action('admin_menu', 'rssdn_admin_actions');
	
function rssdn_popup_embed_sitewide() {
	$rssdn_embed = get_option('rssdn_embed');
	$rssdn_embed_sitewide = get_option('rssdn_embed_sitewide');
	if ($rssdn_embed !="" && $rssdn_embed_sitewide=="on" ) 
	{	echo "<a id='GTFlink' href='http://grabthatfeed.com/subscribeToEmbed/".$rssdn_embed."/' target='_blank'></a><input type='hidden' id='GTFembedid' value='".$rssdn_embed."'/><script src='http://grabthatfeed.com/static/js/grabthatfeed_v4.js'></script>";
	}
}
function rssdn_inline_embed() {
$rssdn_embed = get_option('rssdn_embed');
if ($rssdn_embed !="")
{return "<div id='PMFButtonPH'></div><input type='hidden' id='GTFfeedid' value='".$rssdn_embed."'/><script src='http://grabthatfeed.com/static/js/grabthatfeed.js'></script>";}else{return "";}
}

function rssdn_popup_embed() {
	$rssdn_embed = get_option('rssdn_embed');
	if ($rssdn_embed !="")
	{	return "<a id='GTFlink' href='http://grabthatfeed.com/subscribeToEmbed/".$rssdn_embed."/' target='_blank'></a><input type='hidden' id='GTFembedid' value='".$rssdn_embed."'/><script src='http://grabthatfeed.com/static/js/grabthatfeed_v4.js'></script>";
	}
}

add_action('wp_footer', 'rssdn_popup_embed_sitewide');
add_shortcode('rssdn-popup', 'rssdn_popup_embed');
add_shortcode('rssdn-button', 'rssdn_inline_embed');
?>
