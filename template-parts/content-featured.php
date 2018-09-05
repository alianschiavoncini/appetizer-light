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
        <div class="post-header">
		<?php
        if ( has_post_thumbnail() ) {
        ?>
            <div class="thumbnail-image">
                <a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
            </div>
        <?php
        }
		?>
            <div class="post-meta">
            	<div class="post-category"><?php the_category( ', ' ); ?></div>
            </div>
        </div>
        <div class="post-body">
            <h2><a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <?php
            the_excerpt();
            ?>
        </div>
	</div>
</article>