<?php
/**
 * Template part for displaying page content header
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
    <!-- header -->
    <?php
	$style_bg = false;
	if ( has_post_thumbnail() ) {
		$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
		$style_bg = ' style="background-image:url(' . $img[0] . ');"';
	}
	?>
    <header class="main-header"<?php echo $style_bg; ?>>
    	<div class="main-header-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-title-inner">
                        <?php if ( is_home() && is_front_page() ) { ?>
                        <?php
							$page_title = __( 'Posts', 'appetizer-light' );
							$page_for_posts = get_option('page_for_posts', true);
							if ( $page_for_posts != 0 ) { $page_title = get_the_title( $page_for_posts ); }
						?>
                        <h1 class="page-title"><?php echo $page_title; ?></h1>
                        <?php }elseif ( is_archive() ) { ?>
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php }elseif ( is_search() ) { ?>
                        <?php 	if ( have_posts() ) : ?>
                            <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'appetizer-light' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                        <?php 	else : ?>
                            <h1 class="page-title"><?php _e( 'Nothing Found', 'appetizer-light' ); ?></h1>
                        <?php 	endif; ?>
                        <?php }elseif ( is_404() ) { ?>
                        <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'appetizer-light' ); ?></h1>
                        <?php }else{ ?>
                        <h1 class="page-title"><?php single_post_title(); ?></h1>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- /header -->
