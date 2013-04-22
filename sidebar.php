<!-- begin sidebar -->
<div id="sidebar">
	<div class="partnerBanner"><a target="_blank" href="http://www.picturemarketing.com/process.php"><img src="http://www.picturemarketing.com/images/blog_poster.png" /></a></div>

	<!--div class="sideAd"><a href="http://sponsorpark.com" target="_blank"><img src="http://staging.picturemarketing.com/images/SponsorPark-Bug-v2.jpg" height="150" width="240px" /></a></div-->

<div id="subscribe_box">
	<ul>
		<!--<li><a target="_blank" title="" href="#"><img height="24" width="24" src="http://staging.picturemarketing.com/images/google-buzz.png"></a></li>-->
		<li><a target="_blank" href="http://www.facebook.com/picturemarketing" rel="nofollow" id="header_subscribe_facebook_notext"><img height="24" width="24" src="http://staging.picturemarketing.com/images/facebook.png"></a></li>
		<li><a target="_blank" href="http://twitter.com/PictureMark" rel="nofollow" id="header_subscribe_twitter_notext"><img height="24" width="24" src="http://staging.picturemarketing.com/images/twitter.png"></a></li>
		<li><a target="_blank" title="Email" href="http://feedburner.google.com/fb/a/mailverify?uri=picturemarketing&loc=en_US" rel="nofollow" id="header_subscribe_email_notext"><img height="24" width="24" src="http://staging.picturemarketing.com/images/email.png"></a></li>
		<li><a target="_blank" title="RSS" type="application/rss+xml" rel="nofollow" href="http://feeds.feedburner.com/picturemarketing" id="header_subscribe_rss_notext"><img height="24" width="24" src="http://staging.picturemarketing.com/images/rss.png"></a></li>
		<li id="header_subscribe_label">Social Stuff:</li>
	</ul>
	<div style="clear: both;"></div>
</div>


<?php //Search box 
	if(get_option('tbf1_search_header') == "yes" || (isset($_GET['preview']) && isset($_GET['template']))) : ?>
        	<?php include(TEMPLATEPATH.'/searchform.php'); ?>
<?php endif; ?>


        	<?php if(get_option('tbf1_optin_form') != 'no') : ?>

<script type="text/javascript" src="http://static.ak.connect.facebook.com/connect.php/en_US"></script>
                <script type="text/javascript">FB.init("f650b1f2df0381943c01eef1e453d94b");</script>
                <fb:fan profile_id="277562900018" stream="1" connections="8" logobar="1" width="240"></fb:fan>


<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'PictureMark',
  interval: 6000,
  title: 'Picture Markeing on Twitter',
  subject: 'PictureMark',
  width: 240,
  height: 300,
  theme: {
    shell: {
      background: '#8ec1da',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    toptweets: true,
    behavior: 'default'
  }
}).render().start();
</script>



              <!-- <div id="optinbox">
                <div id="optin-container"<?php echo (get_option('tbf1_optin_hide_msg') == 'yes') ? ' class="optin-nomsg"' : ''?>>
                  <div class="containwithin">	
                    
					<?php if(get_option('tbf1_optin_image_file') && get_option('tbf1_optin_img') == 'yes') :?>
                        <img src="<?php echo get_option('tbf1_optin_image_file')?>"<?php echo (get_option('tbf1_optin_img_alignment') && in_array(get_option('tbf1_optin_img_alignment'), array('left','right')))? ' class="align'.get_option('tbf1_optin_img_alignment').'"' : '' ?><?php echo (get_option('tbf1_optin_img_alignment') == 'center') ? ' style="display:block;margin:2px auto"' : ''?> alt=" " />
                    
					<?php elseif(get_option('tbf1_optin_img') != 'no'): //Default: User has not decided about the use of the image ?>
                        <img src="<?php bloginfo('template_url')?>/images/sample-ecover.png" class="alignleft" alt="Sample eBook" />
                    <?php endif;?>
                    
                    <?php echo (get_option('tbf1_optin_text')) ? get_option('tbf1_optin_text') : '<p>To customize or remove this area, please go to your Admin panel and find My Theme -> Optin Form. Modify it at own will!</p>';?>
                    
                    <div class="recover"></div>
                    
                        <?php if(get_option('tbf1_optin_html')) :?>
                            <?php echo get_option('tbf1_optin_html');?>
                        <?php else: //Example optin form ?>
                            <form action="" method="post" name="opt_form">
                                <input type="text" name="opt_name" id="opt_name" value="<?php _e('Name')?>" onfocus="clearDefault(this)" onblur="restoreDefault(this)" class="textfield" />
                                <input type="text" name="opt_email" id="opt_email" value="<?php _e('Primary Email')?>" onfocus="clearDefault(this)" onblur="restoreDefault(this)" class="textfield" />
                                <input type="text" name="opt_data" id="opt_data" value="" class="textfield" />
                                <input type="submit" name="opt_submit" id="opt_submit" value="Instant Access Now!" onclick="return optformValidate(document.forms.opt_form)" />
                            </form>
                        <?php endif;?>
                    </div>
                </div>
              </div> -->
            <?php endif;?>
			  
			<ul>
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar")) : //If no user selected widgets, display below ?>
                <li id="recent-post-default" class="widget">
                    <h2><a href="#" rel="nofollow" class="sidebartitle"><?php _e("Recent Posts"); ?></a></h2>
                    <ul>
                        <?php wp_get_archives('title_li=&type=postbypost&limit=10'); ?>
                    </ul>
                </li>
                
                <li id="categories" class="widget">
                    <h2><a href="#" rel="nofollow" class="sidebartitle"><?php _e("Categories"); ?></a></h2>
                    <ul>
                      <?php wp_list_categories('orderby=name&title_li=&depth=2'); ?>
                    </ul>
                </li>
                <li id="archives" class="widget">
                    <h2><a href="#" rel="nofollow" class="sidebartitle"><?php _e("Archives"); ?></a></h2>
                    <ul>
                      <?php wp_get_archives('type=monthly'); ?>	
                    </ul>
                </li>
                 
                
                <?php endif; ?>
                
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('240x130 Side Banner Space') ) : ?>
                <?php endif; ?>
			</ul>
		</div><!-- end sidebar -->