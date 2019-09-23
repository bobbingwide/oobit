<?php 
//gobang();


/**
 * The template for displaying oik_presenation "slides"
 *
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header( "oik" );

?>

 <section id="primary">
			<div id="oik_slide" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
                                <?php do_action( "oik_presentation_navigation" ); ?>
                                

					        <?php get_template_part( 'content', 'slide' ); ?> 



				       
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</section><!-- #primary -->
                        

<?php 
//get_sidebar(); 
get_footer( "oik" ); 




 
