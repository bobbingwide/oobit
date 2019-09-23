<?php 


/**
 * 
Template Name: Sidebar
 * The template for displaying oik_presenation "slides" with a sidebar
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

					
					<?php get_template_part( 'content', 'slide' ); ?> 
                                        <nav id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav><!-- #nav-single -->


				       
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</section><!-- #primary -->
                        

<?php 
get_sidebar(); 
get_footer( "oik" ); 




 
