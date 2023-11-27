<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blueboxed
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header mb-2">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				blueboxed_posted_on();
				blueboxed_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php blueboxed_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if ( is_single() ) :
			the_content();
			
			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'blueboxed' ) . '">',
					'after'    => '</nav>',
					/* translators: %: Page number. */
					'pagelink' => esc_html__( 'Page %', 'blueboxed' ),
				)
			);

		else :
			the_excerpt();
		?>
			<div class="readmore-meta mb-2">
				<a href="<?php the_permalink(); ?>"><?php echo __( 'Read More', 'blueboxed' ) ?></a>
			</div>
		<?php
		endif;
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
