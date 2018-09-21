<?php
/**
 * Template part for displaying no content
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
<article id="post-no-content" <?php post_class(); ?>>
    <div class="article-inner">
        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'appetizer-light' ); ?></p>
        <?php get_search_form(); ?>
	</div>
</article>