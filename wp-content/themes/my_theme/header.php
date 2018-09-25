<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>webforworld</title>
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
  ================================================== -->
    <!-- <link rel="stylesheet" href="css/zerogrid.css"> -->
    <!-- <link rel="stylesheet" href="css/menu.css"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/lightbox.css"> -->
    <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <!-- <script src="js/jquery1111.min.js" type="text/javascript"></script> -->
    <!-- <script src="js/script.js"></script> -->
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
	<?php wp_head(); ?>
</head>

<body>
    <div class="wrap-body">
        <!--////////////////////////////////////Header-->
        <header>
            <div class="zerogrid">
                <div class="wrap-header">
                    <div class="logo t-center">
                        <a href="<?php echo home_url(); ?>">
                        	webforworld
						</a>
                    </div>
                    <div id='cssmenu' class="align-center">
                    	<?php wp_nav_menu( array(
                    		'theme_location'  => 'header-menu',
                    		'menu'            => '',
                    		'container'       => '',
                    		'container_class' => 'menu-{menu-slug}-container',
                    		'container_id'    => '',
                    		'menu_class'      => 'menu',
                    		'menu_id'         => '',
                    		'echo'            => true,
                    		'fallback_cb'     => 'wp_page_menu',
                    		'before'          => '',
                    		'after'           => '',
                    		'link_before'     => '',
                    		'link_after'      => '',
                    		'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    		'depth'           => 0,
                    		'walker'          => '',
                    	) ); ?>
<!--                         <ul>
                            <li class="active"><a href='index.html'><span>Home</span></a></li>
                            <li><a href='single.html'><span>About</span></a></li>
                            <li><a href='gallery.html'><span>Gallery</span></a></li>
                            <li class=' has-sub'><a href='archive.html'><span>Blog</span></a>
                                <ul>
                                    <li class='has-sub'><a href='#'><span>Item 1</span></a>
                                        <ul>
                                            <li><a href='#'><span>Sub Item</span></a></li>
                                            <li class='last'><a href='#'><span>Sub Item</span></a></li>
                                        </ul>
                                    </li>
                                    <li class='has-sub'><a href='#'><span>Item 2</span></a>
                                        <ul>
                                            <li><a href='#'><span>Sub Item</span></a></li>
                                            <li class='last'><a href='#'><span>Sub Item</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class='last'><a href='contact.html'><span>Contact</span></a></li>
                        </ul>
 -->                    </div>
                </div>
            </div>
        </header>