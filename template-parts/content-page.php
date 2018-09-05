<?php
/**
 * Template part for displaying post excerpt
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
	?>
	</div>
</article>
<?php
	wp_link_pages();