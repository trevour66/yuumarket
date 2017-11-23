<?php
include_once "login_file/includes/init.php";
?>

<DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	
	
	 <!-- script for login -->
	<link rel="stylesheet" href="login_file/css/bootstrap.min.css">
	<link rel="stylesheet" href="login_file/assets/css/style.css">
	<script src="login_file/assets/js/jquery-1.10.2.min.js"></script>
	<script src="login_file/js/bootstrap.min.js"></script>
	<script src="login_file/assets/js/custom.js"></script>  
	
	
	 <!-- script for search
	================================================== -->
	<link rel="stylesheet" href="addon_2_search/css/zerogrid.css">
	<link rel="stylesheet" href="addon_2_search/css/style.css">
    <link rel="stylesheet" href="addon_2_search/css/responsive.css">
	<link rel="stylesheet" href="caddon_2_search/ss/responsiveslides.css" />
	<link rel="stylesheet" href="addon_2_search/css/searchform.css"/>	
	
	
	
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
	    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="addon/css/zerogrid.css">
	<link rel="stylesheet" href="addon/css/style.css">
	<link rel="stylesheet" href="addon/css/lightbox.css">
	
	<!-- Custom Fonts -->
    <link href="addon/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="addon/css/menu.css">
	<script src="addon/js/jquery1111.min.js" type="text/javascript"></script>
	<script src="addon/js/script.js"></script>

	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
	<link rel="stylesheet" href="css/responsiveslides.css" />  
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/cufon-replace.js" type="text/javascript"></script>
	<script src="js/Vegur_500.font.js" type="text/javascript"></script>
	<script src="js/Ropa_Sans_400.font.js" type="text/javascript"></script> 
	<script src="js/FF-cash.js" type="text/javascript"></script>	  
	<script src="js/tms-0.3.js" type="text/javascript"></script>
	<script src="js/tms_presets.js" type="text/javascript"></script>
	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script>
	
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			maxwidth: 960,
			namespace: "centered-btns"
		  });
		});
	</script>
	
	<script src="addon_2_searchjs/jquery.min.js"></script>
	<script src="addon_2_searchjs/responsiveslides.js"></script>
	
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if lt IE 8]>
	<html class="ie ie8" lang="en">
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
			<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		</a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/css3-mediaqueries.js"></script>
 		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
	
	
	<!--for site icon-->
		<link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>

</head>
<body id="page1">
	<!--==============================header=================================-->
	<!--<header>-->
	<!--	<div class="border-bot">
			<div class="main zerogrid">
				<h1><a href="index.html">InternetCafe</a></h1>
				<nav>
					<ul class="menu">
						<li><a class="active" href="index.html">Home</a></li>
						<li><a href="index-1.html">Events</a></li>
						<li><a href="index-2.html">Services</a></li>
						<li><a href="index-3.html">Jobs</a></li>
						<li><a href="contact.html">Contacts</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
		</div> -->
		
		
		
		<div id='cssmenu' class="align-center">
			<ul>
			
			<?php if(!logged_in()) : ?>
						<li class="active"><a href='index.php'><span>Home</span></a></li>
						<?php else : ?>
						 <li class="active"><a href='user.php'><span>Home</span></a></li>
						<?php endif; ?>
				
			   <li><a href='about.html'><span>Blog</span></a></li>
			   <li><a href='menu.html'><span>Sell product</span></a></li>
			  <li><a href='event.html'><span>Wirte a post</span></a></li>
			   <li><a href='contact.html'><span>Contacts</span></a></li>

				<?php if(!logged_in()) : ?>
							<li class='last'><a href="login.php">Login</a></li>
						<?php else : ?>
							<li><a href='update_profile.php?user_id=$id'><span>Update Account</span></a></li>
							<li class='last'><a href="logout.php">Logout</a></li>
						<?php endif; ?>
				
				
			</ul>
		</div>
		
	
				
				<!-- </section>	-->
				<!--</header> -->
	
	