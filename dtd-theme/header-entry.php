


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|PT+Serif:400,700,300|Lobster' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'dtd' ); ?></a>

	<header id="masthead" class="entry-header site-header" role="banner">
		<div class="top-bar">
			
		</div>
		<div class="site-branding">
			
			<? if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_title(); ?></a></h1>
				
				<div class="site-description">
					<? echo the_excerpt(); ?>
				</div>
				
				<p class="header-meta">
					<? the_date(); ?>
					BY
					<span class="red caps"><? the_author(); ?></span>
				</p>
			<? endwhile; endif;
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dtd' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">