<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscores' ); ?></a>

	<header id="masthead" class="site-header">
	<nav id='menu'>
            <input id="checkMenu" type="checkbox">
            <label id="btnMenu" for="checkMenu">&#9776;</label>
            <ul class='global'>
                <li><a href="https://www.nhl.com/fr" target="_blank">1</a></li>
                <li><a href="https://www.espn.com/nhl/" target="_blank">2</a></li>
                <li><a href="https://www.rds.ca/hockey/lnh" target="_blank">3</a></li>
                <li><a href="https://www.tsn.ca/nhl" target="_blank">4</a></li>
				<li><a href="https://www.nbcsports.com/nhl" target="_blank">5</a></li>
				<li><a href="https://www.linkedin.com/in/tommy-leha/" target="_blank">6</a></li>
				<li><a href="https://lehatommypro.wixsite.com/portfolio" target="_blank">7</a></li>
				<li><a href="https://www.instagram.com/tommyleha/?hl=fr-ca" target="_blank">8</a></li>
				<li><a href="https://www.facebook.com/tommy.leha" target="_blank">9</a></li>
				<li><a href="https://theaudl.com/" target="_blank">10</a></li>
                

            </ul>
    </nav>
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$underscores_description = get_bloginfo( 'description', 'display' );
			if ( $underscores_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $underscores_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'underscores' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
