<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Under_LTE
 */

?>

<div id="post-<?php the_ID(); ?>" class="box">
    <div class="box-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php under_lte_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<?php under_lte_post_thumbnail(); ?>

    <div class="box-body">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<div class="box-footer">
		<?php under_lte_entry_footer(); ?>
	</div><!-- .entry-footer -->
</div><!-- #post-<?php the_ID(); ?> -->
