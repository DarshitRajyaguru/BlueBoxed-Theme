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
		<div class="py-4 bg-black d-xl-flex justify-content-between align-items-start blueboxed-footer">
			<?php
			$blog_info = get_bloginfo('name');
			$show_title = (true === get_theme_mod('display_title_and_tagline', true));
			$header_class = $show_title ? 'site-title' : 'screen-reader-text';
			?>



			<?php if (is_active_sidebar('footer-1')): ?>
				<div class="footer-1 col-md-4">
					<?php if (has_custom_logo()): ?>
						<div class="site-logo">
							<?php the_custom_logo(); ?>
						</div>
					<?php else: ?>
						<h2 class="<?php echo esc_attr($header_class); ?>"><a href="<?php echo esc_url(home_url('/')); ?>">
								<?php echo esc_html($blog_info); ?>
							</a></h2>
					<?php endif; ?>
					<?php dynamic_sidebar('footer-1'); ?>
				</div>
			<?php endif; ?>

			<?php if (is_active_sidebar('footer-2')): ?>
				<div class="footer-2">
					<?php dynamic_sidebar('footer-2'); ?>
				</div>
			<?php endif; ?>

			<?php if (is_active_sidebar('footer-3')): ?>
				<div class="footer-3">
					<?php dynamic_sidebar('footer-3'); ?>
				</div>
			<?php endif; ?>

		</div>

	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>