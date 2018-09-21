<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Appetizer_Light
 * @since 1.0.0
 * @version 1.0.0
 * @author Alian Schiavoncini <alian@alian.it>
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="article-inner">
	<?php
	the_content();

	the_tags( '<p class="post-meta post-tags"><strong>' . esc_html__( 'Tags', 'appetizer-light' ).':</strong> ', ', ', '</p>' );
    ?>
	</div>
    <?php get_template_part( 'template-parts/navigation', 'single' ); ?>
    <?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
    ?>
</article>
