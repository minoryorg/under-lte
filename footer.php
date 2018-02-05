<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Under_LTE
 */

?>

	<footer class="main-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'under-lte' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'under-lte' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'under-lte' ), 'under-lte', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
$(function(){
	// Content
    $('body').addClass('hold-transition fixed sidebar-mini <?php echo get_option( 'color' ); ?>');
	$('.sidebar-menu > ul > li').unwrap();
	$('.sidebar-menu > li > a').each(function() {
		$(this).html('<i class="fa fa-circle-o"></i> <span>' + $(this).text() + '</span>');
	});
	$('.navbar-custom-menu ul').addClass('nav navbar-nav');
    // Add to ...
});
</script>
</body>
</html>
