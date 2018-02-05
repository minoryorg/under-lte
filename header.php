<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Under_LTE
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <!-- start header -->
        <header class="main-header">
			<!-- Logo -->
			<?php the_custom_logo(); ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><?php echo substr( get_bloginfo('name'), 0, 1 ); ?></span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><?php bloginfo( 'name' ); ?></span>
			</a>
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description" style="display: none;"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>

            <!-- トップメニュー -->
			<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
	            <div class="navbar-custom-menu">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
	            </div>
            </nav>
        </header><!-- end header -->
