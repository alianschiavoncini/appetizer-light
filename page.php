<?php
/**
 * The template for displaying all pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Appetizer_Light
 * @since 1.0.0
 * @version 1.0.0
 * @author Alian Schiavoncini <alian@alian.it>
 */

get_header();
?>
<!-- wrapper -->
<div class="wrapper">

    <?php get_template_part( 'template-parts/content', 'header' ); ?>
    
    <!-- content-section -->
    <section class="content-section post-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <?php
                if ( have_posts() ) :
				
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'page' );
		
					endwhile; // End of the loop.

                else :
            
                    get_template_part( 'template-parts/content', 'none' );
            
                endif;
                ?>
                </div>
            </div>
        </div>
    </section> <!-- /content-section -->

</div> <!-- /wrapper -->
<?php
get_footer();