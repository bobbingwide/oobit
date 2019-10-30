<?php
/**
 * Template for displaying the author box on a page
 *
 * @package oobit
 * @since oobit 2.0.0
 */

if ( get_the_author_meta( 'description' ) ) :
?>
<div id="author-info">
	<div id="author-avatar">
		<?php
		/**
		 * Filter the Twenty Eleven author bio avatar size.
		 *
		 * @since Twenty Eleven 1.0
		 *
		 * @param int The height and width avatar dimension in pixels. Default 60.
		 */
		echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 60 ) );
		?>
	</div><!-- #author-avatar -->
	<div id="author-description">
		<h2><?php printf( __( 'About %s', 'twentyeleven' ), get_the_author() ); ?></h2>
		<?php the_author_meta( 'description' ); ?>
	</div><!-- #author-description	-->
</div><!-- #author-info -->
<?php else: ?>


<?php endif; ?>
