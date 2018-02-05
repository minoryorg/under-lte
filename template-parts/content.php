<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Under_LTE
 */

?>

<div id="post-<?php the_ID(); ?>" class="box">
    <div class="box-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="box-title">', '</h1>' );
		else :
			the_title( '<h2 class="box-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php under_lte_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
    </div>
    <div class="box-body">
		<div class="media">
            <div class="media-left">
                <a href="<?php esc_url( get_permalink() ); ?>" class="ad-click-event">
					<?php under_lte_post_thumbnail(); ?>
                </a>
            </div>
            <div class="media-body">
				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'under-lte' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );
		
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'under-lte' ),
						'after'  => '</div>',
					) );
				?>
            </div>
        </div>
    </div>
	<div class="box-footer">
		<?php under_lte_entry_footer(); ?>
	</div>
	<!-- box-footer -->
</div><!-- #post-<?php the_ID(); ?> -->
