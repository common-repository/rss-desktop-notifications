<?php 
		if($_POST['rssdn_hidden'] == 'Y') {
			//Form data sent
			$rssdn_embed = $_POST['rssdn_embed'];  
			update_option('rssdn_embed', $rssdn_embed);  
			$rssdn_embed_sitewide = $_POST['rssdn_embed_sitewide'];  
			update_option('rssdn_embed_sitewide', $rssdn_embed_sitewide);  
			
			?>
			<div class="updated"><p><strong><?php _e('Options saved.' );?></strong></p></div>  
			<?php
		} else {
			$rssdn_embed = get_option('rssdn_embed');
			$rssdn_embed_sitewide = get_option('rssdn_embed_sitewide','on');

		}
?>
<link href='http://fonts.googleapis.com/css?family=Dosis:400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200' rel='stylesheet' type='text/css'>
<link href='http://grabthatfeed.com/static/css/base.css' rel='stylesheet' type='text/css'>

<style>
iframe{
width:980px;
height:550px;
}
</style>
<div class="wrap">
	<iframe scrolling="no" src='http://grabthatfeed.com/wordpressPlugin/'></iframe>
	<hr />	
	<form id='rssdn_form' name="rssdn_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<input type="hidden" name="rssdn_hidden" value="Y">
		<h1>Once you've completed the steps above, enter your feed ID here:</h1>
		<p>Your feed ID: <input type="text" name="rssdn_embed" value="<?php echo $rssdn_embed; ?>" size="4" style='width:100px;text-align:right;'></p>
		<h3>Prompt to subscribe from all pages?</h3>
		<p><input type="checkbox" name="rssdn_embed_sitewide" <?php if ($rssdn_embed_sitewide=="on") echo "checked"; ?> >&nbsp;&nbsp;&nbsp;&nbsp;Yes, embed in all of my pages</p>
		If you check this box, the popup prompting visitors to subscribe to your feed will appear on every page, until a user dismisses it. Once dismissed by a user, it will not appear again.
		If you wish to include your code just on a single page, leave this box unchecked and see options below.
		<br>
		<p class="submit">
		<input type="submit" name="Submit" class='GTFButton' value="<?php _e('Update Options', 'rssdn_trdom' ) ?>" />
		</p>
		<hr />	
		<h3>To include prompt on a single page</h3>
		To include the popup notification prompt on just a single page on your website, enter this code anywhere on your page:<br>		<b>[rssdn-popup]</b>
		<h3> To include a modest inline button on a single page</h3>
		To inlclude an inline button for your visitors to subscribe with, enter this code in the desired location in your page:<br>		<b>[rssdn-button]</b>
		

	</form>
	</div>

	<style>
	
	#wpfooter{
		display:none;//was interfering
	}
	#rssdn_form{
	margin-left:20px;
	}
	.embedinput{
	width:600px;
	height:80px;
	}
	#mytext{
	font-size:13px;
	width:600px;
	text-align:justify;
	}
	h2{
		font-size:
	}
	</style>
</div>
