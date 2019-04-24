<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hw
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="http://example.com/wp-content/themes/hw/node_modules/jquery/dist/jquery.js"></script>

	<link rel="stylesheet" href="http://example.com/wp-content/themes/hw/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="http://example.com/wp-content/themes/hw/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

	<script src="http://example.com/wp-content/themes/hw/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://example.com/wp-content/themes/hw/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="js/script.js"></script>

	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	

	<header id="masthead" class="site-header">
		<div class="header">
			<div class="header__logo">
				<?php the_custom_logo(); ?>
			</div>
			<div class="header__menu">
				<ul class="flex user">
					<li>
						<a href="#">Login</a>
					</li>
					<li class="active">
						<a href="https://www.advancedcustomfields.com/resources/options-page/">My Planner</a>
					</li>
				</ul>
				<nav id="site-navigation" class="header__menu--nav flex">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'header',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav>
			</div>
		</div>


		


	</header>

	<div id="content" class="site-content">
