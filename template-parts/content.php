<?php
/**
 * Template part for displaying posts
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
    if ( has_post_thumbnail() ) {
    ?>
        <div class="thumbnail-image">
            <a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
        </div>
    <?php
    }
	the_content();
	?>
	</div>
</article>