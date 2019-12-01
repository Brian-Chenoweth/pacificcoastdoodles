<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brain
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  
	<meta name="title" content="Pacific Coast Doodles | Australian Labradoodles | Arroyo Grande, CA">
	<meta name="description" content="Welcome to Pacific Coast Doodles. We are a small family owned breeder specializing in Multi Gen Australian Labradoodles. We are located in Arroyo Grande, CA.">
	<meta name="keywords" content="labradoodles, australian labradoodles ">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">

</head>



<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'brain' ); ?></a>

	<?php if (is_front_page()): ?>
		<figure class="header-image">
			<?php the_header_image_tag(); ?>
		</figure>
	<?php endif; ?>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
			<!-- <img src="/wp-content/themes/pacificcoastdoodles/img/logo.png" alt="" class="logo"> -->
			<a href="/">
				<img src="/wp-content/themes/pacificcoastdoodles/img/logo.png" alt="" class="logo">
			</a>
			<div class="location">
				<p class="city">Arroyo Grande, CA</p>
				<a href="tel:1-805-448-0375" class="phone">(805) 448-0375</a>
			</div>	
			</div><!-- .site-branding-text -->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
					<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
			) );
			?>
			<div class="buttonwrap">
				<button class="menu-toggle" id="menuToggle" aria-controls="primary-menu" aria-expanded="false">
					<input type="checkbox"/>
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
