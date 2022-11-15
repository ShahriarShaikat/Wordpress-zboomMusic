<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> > 
<!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="Shaikat">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	
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
	
	<link href='<?php echo esc_url(get_template_directory_uri());?>/images/favicon.ico' rel='icon' type='image/x-icon'/>
    <?php global $redux_demo; ?>
	<style type="text/css">
		
     <?php echo $redux_demo['clustom_ckss']; ?> 
     header .wrap-header{
     	background: <?php echo $redux_demo['header_color']; ?>;
     }
     body{
     	background-color:<?php echo $redux_demo['background_option']['background-color']; ?> !important;
        background-image:url("<?php echo $redux_demo['background_option']['background-image']; ?>") !important;
        background-position:<?php echo $redux_demo['background_option']['background-position']; ?> !important;
        background-size:<?php echo $redux_demo['background_option']['background-size']; ?> !important;
        background-repeat:<?php echo $redux_demo['background_option']['background-repeat']; ?> !important;
        background-attachment:<?php echo $redux_demo['background_option']['background-attachment']; ?> !important;
        
     }
     nav .wrap-nav{
     	height: <?php echo $redux_demo['dimensions_select']['height']; ?> ;
     	width: <?php echo $redux_demo['dimensions_select']['width']; ?> ;
     	border-style: <?php echo $redux_demo['menu_border']['border-style']; ?>;
     	border-width: <?php echo $redux_demo['menu_border']['border-top']; ?>;
     	border-color: <?php echo $redux_demo['menu_border']['border-color']; ?>; 
     }

	</style>

	



	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<!--------------Header--------------->

<header>
	<div class="wrap-header zerogrid">
		<div id="logo">
        <?php if($redux_demo['zboom_switch']==1): ?> 		
        <a href="<?php bloginfo('Home'); ?>"><img src="<?php echo $redux_demo['logo_image']['url']; ?>"/></a>


		<?php endif; ?>

		</div>
        
        <?php if(true=== get_theme_mod('check') ):  ?>
		<h3 class="divi"><?php echo get_theme_mod('text'); ?></h3>
	<?php endif ?>

        <div id="search">

		<?php if($redux_demo['search_visibility']==1): ?>		
			<form  method="GET" action="<?php echo esc_url(bloginfo('home')); ?>">
				
			<input id="hhhhhhh" name="s" type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
			
			<button id="searchform"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		<?php endif; ?>

		</div>
		
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<?php 
			if (function_exists('wp_nav_menu'))
			 {
				wp_nav_menu(array(
                  
                  'theme_location' => 'MainMenu',
                  'container'=> ' ',
                  //'walker'=> new WP_Bootstrap_Navwalker()

                  ));
			 }
			?>
		</div>		
	</div>
</nav>
<h3><?php echo WP_CONTENT_DIR.'/lanaguages/elementor-pro/elementor-pro-zh_CN.mo'; ?></h3>
<h3><?php echo dirname( plugin_basename( __FILE__ ) ) . '/languages' ; ?></h3>
<h3><?php echo WP_LANG_DIR   ; ?></h3>
<h3><?php echo WP_LANG_DIR .'/'. get_locale() . '.mo'; ?></h3>