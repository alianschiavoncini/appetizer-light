<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Appetizer_Light
 * @since 1.0.0
 * @version 1.0.0
 * @author Alian Schiavoncini <alian@alian.it>
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>
<div class="col-md-4 sidebar" role="complementary">
    <?php dynamic_sidebar( 'sidebar' ); ?>
</div>
