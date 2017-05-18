<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(''); ?></title>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->



		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/hover.css">
		<link rel="stylesheet" href="//static.colostate.edu/fonts/proxima-nova/proxima.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans: 400,700|Playfair+Display" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/library/js/ScrollMagic.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/library/js/animation.gsap.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/library/js/plugins/debug.addIndicators.min.js"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99305135-1', 'auto');
  ga('send', 'pageview');

</script>

	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1248703928546813";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div class="bgColor"></div>
	<script> var controller = new ScrollMagic.Controller(); </script>
		<div id="container">
			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<div id="inner-header" class="wrap cf">
				<section id="BrandLogo">
					<script>(function(){BrandLogo.style.cssText = 'opacity:0; height:67px; overflow:hidden;'})();</script>
					<h1><a href="http://colostate.edu">Colorado State University</a></h1>
					<h2><p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
					</h2>
					<script src="//static.colostate.edu/logo/reslogo/logo.min.js" async defer></script>
					<script>
					var logosettings = {
					screenSM: 400
					,screenMD: 600
					,screenLG: 800
					,baseSize: 380
					,fontSize: 'large' //large or small (default is small)
					};
					</script>
				</section>
				</div>
				</header>
				<div id="pinned-trigger1">
				<div id="trigger"></div>
				<div class="navBar shadowBox" id="pinned-element1" >
				<div id="inner-header" class="cf">
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           
    					         'container_class' => 'menu cf',                 
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  
    					         'menu_class' => 'nav cf',               
    					         'theme_location' => 'main-nav',                
    					         'before' => '',                                 
        			               'after' => '',                                 
        			               'link_before' => '',                           
        			               'link_after' => '',                            
        			               'depth' => 0,                                   
    					         'fallback_cb' => ''                             
						)); ?>

					</nav>
					</div>
					</div>
				</div>
					<div class="weatherStation">
						<div class="wrap">
							<?php get_template_part('weather_station') ?>
						</div>
					</div>

				<div class="bcg subSubHome">
						<div class="textBannerHome textBannerBarHome">
						<div class="marginBox textBannerContentHome" id="animateHeader">
						<img src="<?php echo get_template_directory_uri();?>/library/images/CIRAlogo.png" alt="CIRA" />
						<h2 class="page-title"><?php the_title(); ?></h2>
						</div>
						</div>
					</div>
	<div class="wrapXL">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	</div>
	</div>
