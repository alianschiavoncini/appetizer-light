<?php
/**
 * The template for displaying 404 pages (not found).
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
                    <article id="post-404notfound">
                        <div class="article-inner">
                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'appetizer-light' ); ?></p>
                            <?php get_search_form(); ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section> <!-- /content-section -->

</div> <!-- /wrapper -->
<?php
get_footer();