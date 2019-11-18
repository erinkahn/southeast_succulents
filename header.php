<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre:300,400,700|Federo|Gochi+Hand|Jomolhari|Nanum+Pen+Script|Staatliches&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">

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
				<div class="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo bloginfo( 'template_directory' ).'/assets/img/logo2.svg'; ?>">
					</a>
			</div>
				<?php
			else :
				?>
				<h1 class="site-logo two">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo bloginfo( 'template_directory' ).'/assets/img/logo2.svg'; ?>">
					</a>
				</h1>
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


		<div class="mobile-menu-btn">
			<img src="<?php echo bloginfo('template_directory').'/assets/img/mobile-succulent.svg';?>" alt="succulent">
		</div>

	</header><!-- #masthead -->

	<div class="mobile-nav-list">
		<?php
		wp_nav_menu( array(	
			'theme_location' => 'mobile'
		) );
		?>
	</div>

	<div id="content" class="site-content">
