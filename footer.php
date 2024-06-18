<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueboxed
 */

?>

<footer>
	<div class="container">
		<div class="py-4 bg-black d-xl-flex blueboxed-footer">
			<?php
			$blog_info    = get_bloginfo( 'name' );
			$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
			$footer_class = $show_title ? 'site-title' : 'screen-reader-text';
			?>

			<!-- <?php if ( has_custom_logo() ) : ?>
				<div class="site-logo"><?php the_custom_logo(); ?></div>
			<?php else : ?>
				<h3 class="<?php echo esc_attr( $footer_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h3>
			<?php endif; ?> -->

			
				<div class="footer-1 col-md-4">
					<?php if (has_custom_logo()): ?>
						<div class="site-logo">
							<?php the_custom_logo(); ?>
						</div>
					<?php else: ?>
						<h2 class="<?php echo esc_attr($footer_class); ?>"><a href="<?php echo esc_url(home_url('/')); ?>">
								<?php echo esc_html($blog_info); ?>
							</a></h2>
					<?php endif; ?>
					<?php dynamic_sidebar('footer-1'); ?>
				</div>
			

			
				<div class="footer-2 col-md-4">
					<?php dynamic_sidebar('footer-2'); ?>
				</div>
			

			
				<div class="footer-3 col-md-4">
					<?php dynamic_sidebar('footer-3'); ?>
				</div>
			

		</div>

	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>