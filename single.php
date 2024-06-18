<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blueboxed
 */

get_header();
?>

	<main id="primary" class="site-main blueboxed-page blueboxed-post">
		<div class="container">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Prev:', 'blueboxed' ) . '</span> <span class="nav-title">' . wp_trim_words( get_the_title(), 2, '...' ) . '</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'blueboxed' ) . '</span> <span class="nav-title">' . wp_trim_words( get_the_title(), 2, '...' ) . '</span>',
					)
				);				

				// If comments are open or there is at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				
			endwhile; // End of the loop.
			?>
		</div>

	</main><!-- #main -->

<?php
get_footer();
