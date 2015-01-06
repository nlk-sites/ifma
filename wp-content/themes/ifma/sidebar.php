<?php
/**
 * Sidebar template containing the primary and secondary widget areas
 *
 * @package WordPress
 * @subpackage ifma
 * @since IFMA 1.0
 */
?>

	<?php get_sidebar('nav'); ?>


	<?php
	/*
	 * When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

	<div id="primary" class="widget-area" role="complementary">
		<ul class="xoxo">
			<?php dynamic_sidebar( 'primary-widget-area' ); ?>
		</ul>
	</div><!-- #primary .widget-area -->

	<?php endif; // end primary widget area ?>

	<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

	<?php endif; ?>
