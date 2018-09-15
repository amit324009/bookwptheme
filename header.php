<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amit_start
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Wrapper -->
	<div class="wrapper push-wrapper">

		<!-- Header -->
		<header id="header">
			
			<!-- Top Bar -->
			<div class="topbar">
				<div class="container">
					
					<!-- Online Option -->
					<div class="online-option">
						<ul>
							<li><a href="#">online store</a></li>
							<li><a href="#">Payment</a></li>
							<li><a href="#">shipping</a></li>
							<li><a href="#">Return</a></li>
						</ul>
					</div>
					<!-- Online Option -->

					<!-- Social Icons -->
					<div class="social-icons pull-right">
						<ul>
							<li><a class="fa fa-facebook" href="#"></a></li>	
							<li><a class="fa fa-twitter" href="#"></a></li>	
							<li><a class="fa fa-google-plus" href="#"></a></li>	
							<li><a class="fa fa-pinterest-p" href="#"></a></li>	
						</ul>
					</div>
					<!-- Social Icons -->

					<!-- Cart Option -->
					<div class="cart-option">
						<ul>
							<li class="add-cart"><a href="#"><i class="fa fa-shopping-bag"></i><span>3</span></a></li>
							<li><a href="#"><i class="fa fa-heart-o"></i>wish List 0 items</a></li>
							<li><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i>Login / Register</a></li>
						</ul>
					</div>
					<!-- Cart Option -->

				</div>
			</div>
			<!-- Top Bar -->

			<!-- Nav -->
			<nav class="nav-holder style-1">
				<div class="container">
					<div class="mega-dropdown-wrapper">

						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="images/logo-1.png" alt=""></a>
						</div>
						<!-- Logo -->

						<!-- Search bar -->
						<div class="search-bar">
							<a href="#"><i class="fa fa-search"></i></a>
						</div>
						<!-- Search bar -->

						<!-- Responsive Button -->
						<div class="responsive-btn">
							<a href="#menu" class="menu-link circle-btn"><i class="fa fa-bars"></i></a>
						</div>
						<!-- Responsive Button -->

						<!-- Navigation -->
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu 1',
								'menu_id'        => 'primary-menu',
								'container_class' => 'navigation',
                                'menu_class'	 	=> '',
                                'link_before' => '<i class="fa fa-home"></i>',
							) );
							?>
						<!-- Navigation -->

					</div>
				</div>
			</nav>
			<!-- Nav -->

			<!--BANNER-->
			<div id="main-slider" class="main-slider">

				<!-- Item -->
				<div class="item">
					<img src="images/banner/bg-1.jpg" alt="">
					<div class="banner-overlay">
						<div class="container p-relative">
							
							<!-- Layer Img -->
							<div class="layer-img">
								<img src="images/banner/layer-1.png" alt="">
							</div>
							<!-- Layer Img -->

							<!-- caption -->
							<div class="caption style-1 position-center-x">
								<h1>I love this idea!</h1>
								<b>Cover up front of book and leave summary</b>
								<p>Booking is Australia’s number-one source of news about the book industry, keeping subscribers</p>
								<a href="#" class="btn-1">Learn more<i class="fa fa-arrow-circle-right"></i></a> 
							</div>
							<!-- caption -->

						</div>
					</div>
				</div>
				<!-- Item -->

				<!-- Item -->
				<div class="item">
					<img src="images/banner/bg-2.jpg" alt="">
					<div class="banner-overlay">
						<div class="container position-center-center">

							<!-- caption -->
							<div class="caption style-2">
								<h1>Reading a book is like <span>Re Writing it for yourself</span></h1>
								<p>A Cambridge academic claims to have found the first use of a ‘brilliant innovation’ that has endured as a mark of incomplete speech</p>
							</div>
							<!-- caption -->

						</div>
					</div>
				</div>
				<!-- Item -->

			</div>
			<!--BANNER-->

		</header>
		<!-- Header -->
