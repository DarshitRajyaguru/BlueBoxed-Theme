<?php
/**
 * Displays the site header.
 *
 * @package blueboxed
 */

$wrapper_classes  = 'site-header';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>">
    <div class="menu relative zindex-1">

        <!-- Site Navigation -->
        <?php get_template_part( 'template-parts/header/site-nav' ); ?>
		
	</div>
</header><!-- #masthead -->