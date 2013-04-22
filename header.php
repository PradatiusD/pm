<?php
global $wp_version;

$body_css = '';
$body_css .= (get_option('tbf1_background_image_file')) ? 'background-image:url('.get_option('tbf1_background_image_file'). ');' : '';
$body_css .= (get_option('tbf1_background_color')) ? 'background-color:'.get_option('tbf1_background_color'). ';' : '';
$body_css .= (get_option('tbf1_background_repeat')) ? 'background-repeat:'.get_option('tbf1_background_repeat'). ';' : '';

$body_css .= (get_option('tbf1_font_size')) ? 'font-size:'.get_option('tbf1_font_size'). ';' : '';

$skin_folders = array('silver'=>'skin-silver', 'red'=>'skin-red', 'green'=>'skin-green');

foreach($skin_folders as $key=>$value) {
	if(get_option('tbf1_skin_color') == $key) {
		$skin_dir = $value;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
	<?php echo ($title = wp_title('&#8211;', false, 'right')) ? $title : ''; ?><?php echo ($description = get_bloginfo('description')) ? $description : bloginfo('name'); ?>
</title>

<meta name="author" content="<?php bloginfo('name'); ?>" />
<link rel="shortcut icon" href="http://staging.picturemarketing.com/images/favicon.ico" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_enqueue_script('jquery'); ?>
<?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>

<link href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" rel="stylesheet" />
<?php if(isset($skin_dir)):?>
<link href="<?php bloginfo('template_url'); ?>/images/<?php echo $skin_dir?>/style.css" type="text/css" rel="stylesheet" />
<?php endif;?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>

<!--[if gte IE 5.5]>
<style type="text/css">.post img, .page img, .customhtml img {width: expression(this.width > 505 ? 505: true) }</style>
<![endif]-->
</head>

<body <?php echo (version_compare($wp_version, '2.8', '>=')) ? body_class() : ''?> <?php echo ($body_css) ? 'style="'.$body_css. '"' : ''?>>
<div id="bg" <?php echo (get_option('tbf1_header_image_file')) ? 'style="background-image:url('.get_option('tbf1_header_image_file'). ')"' : ''?>>
	<div id="header">

<!--
          <h1 id="logo">
			<?php if (get_option('tbf1_logo_header') == "yes" && get_option('tbf1_logo')) { ?>
                    <a href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_option('tbf1_logo'); ?>" title="<?php bloginfo('name'); ?> - 
					<?php bloginfo('description'); ?>" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" /></a>
            <?php } else { //If no logo, show the blog title and tagline by default ?>
            	<a href="<?php bloginfo('url'); ?>" id="blogname" style="background:none;text-indent:0;width:auto"><span class="blod"><?php bloginfo('name'); ?></span><br /><?php bloginfo('description'); ?></a>
            <?php } ?>
          </h1>
-->

	<div id="top-wrap">
    		<div class="mainlogo">
			<a href="http://www.picturemarketing.com/"><img width="269" height="70" alt="Picture Marketing, Inc." src="http://www.picturemarketing.com/images/logo.png"></a>
		</div>

<a id="menu_login" href="https://control.fotozap.com/">
            <img src="http://www.picturemarketing.com/images/menu_login.png"/>
        </a>
            
         <a id="menu_phone" href="http://picturemarketing.com/#/contactus">
            <img src="http://www.picturemarketing.com/images/nav_phone_text.png"/>
        </a>
    		
    		<div id="menu">
       			<ul>
<li class="lastnav"><a href="http://picturemarketing.com/#/contactus">Contact Us</a></li>
<li><a href="http://blog.picturemarketing.com/" >Blog</a></li>
<li><a href="http://picturemarketing.com/#/clients">Client Examples</a></li>
<li><a href="http://picturemarketing.com/#/products">Products</a></li>
<li class="firstnav"><a href="http://picturemarketing.com/#/process">How it Works</a></li>
	  
			</ul>
		</div><!-- end #menu -->
	</div><!-- end #top-wrap -->
    </div><!-- end #header -->

    <div id="shadow">
     
        
        <!--div id="main-content-top"></div-->
        <div id="container">
		<div id="container-shoulder">
			
            	<div id="left-col">
			<ul class="left-col-nav">
				<!--li><a href="<?php echo get_option('home'); ?>" rel="nofollow"><?php _e('All articles')?></a></li-->
			</ul>
