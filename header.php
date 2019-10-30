<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre:300,400,700|Federo|Gochi+Hand|Jomolhari|Nanum+Pen+Script|Staatliches&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="page" class="site">

	<header id="masthead" class="site-header">

		<nav class="main-navigation left-side">
			<?php
			wp_nav_menu( array(	
				'theme_location' => 'primary'
			) );
			?>
		</nav>

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo bloginfo( 'template_directory' ).'/assets/img/logo2.svg'; ?>"></a></h1>
				<?php
			else :
				?>
				<h1 class="site-logo two"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo bloginfo( 'template_directory' ).'/assets/img/logo2.svg'; ?>"></a></h1>
				<?php
			endif;
			?>
		</div><!-- .site-branding -->

		<nav class="main-navigation right-side">
			<?php
			wp_nav_menu( array(	
				'theme_location' => 'secondary'
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
