<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="vi"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="vi"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="vi"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="<?php language_attributes();?>"> <!--<![endif]-->
<head>
    <!-- Basic Page Needs
  ================================================== -->
  
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="description" content="<?php bloginfo('description');?>">
	<meta name="author" content="lupanh">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- COMMENT FACEBOOK LUPANH NGUYEN
	============================================== -->
    <meta property="fb:app_id" content="2005760099655132" />
	<meta property="fb:admins" content="100001023285880"/>
    <!-- CSS
  ================================================== -->
  	
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"/>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href="images/favicon.ico'" rel='icon' type='image/x-icon'/>
	<?php global $lp_options; ?>
	<style type="text/css">
		<?php echo $lp_options['custom-css']; ?>
		body, p{
			color:<?php echo $lp_options['default-color']?>;
		}
		article a{
			color:<?php echo $lp_options['link-color']?>!important;
		}
	</style>
	<?php wp_head();?>
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=261585444302363";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body <?php body_class();?>>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="<?php  bloginfo('url');?>"><img src="<?php  echo $lp_options['header-upload']['url']; ?>"/></a></div>
		
		<div id="search">
			<div class="button-search"></div>
			<form action="<?php esc_url(bloginfo('url'));?>" method="GET">
				<input type="text" name="s" id="s" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
			</form>
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid ">
		<div class="menu">
			<?php 
			if(function_exists('wp_nav_menu')){
				wp_nav_menu(array(
					'theme_location'=>'main-menu',
					'container'		=>''
				));
			}
			?>
		</div>
		
	</div>
</nav>