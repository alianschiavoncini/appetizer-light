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
        if ( has_post_thumbnail() ) {
        ?>
        <div class="post-header">
            <div class="thumbnail-image">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
            </div>
        </div>
        <?php
        }
		?>
        <div class="post-body">
            <div class="post-meta">
                <span class="post-category"><?php the_category( ' '); ?></span><span class="post-date"><time datetime="<?php the_time("Y-m-d"); ?>" pubdate><i class="fa fa-calendar"></i> <?php the_time( get_option('date_format') ); ?></time></span>
            </div>
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <div class="post-meta">
                
            </div>
            <?php
            the_excerpt();
            ?>
        </div>
	</div>
</article>