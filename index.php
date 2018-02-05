<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Under_LTE
 */

get_header();
get_sidebar(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<?php
if ( have_posts() ) :
	
	if ( is_home() && ! is_front_page() ) : ?>
	<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?php single_post_title(); ?></h1>
    </section>
    <?php endif; ?>

    <!-- Main content -->
    <section class="content">
		
		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_format() );

		endwhile;

		the_posts_navigation();
		 ?>

    </section>

<?php
else :

	get_template_part( 'template-parts/content', 'none' );

endif; ?>

</div><!-- #primary -->

<?php
get_footer();
