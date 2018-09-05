<?php
/**
 * Template part for prev and next page
 *
 * @link https://codex.wordpress.org/Next_and_Previous_Links
 *
 * @package WordPress
 * @subpackage Appetizer_Light
 * @since 1.0.0
 * @version 1.0.0
 * @author Alian Schiavoncini <alian@alian.it>
 */

?>
<div class="navigation-page">
	<div class="row">
        <div class="col-6">
            <div class="prev-page">
            <?php previous_post_link( '&laquo; %link' ); ?>
            </div>
        </div>
        <div class="col-6">
            <div class="next-page">
            <?php next_post_link( '%link &raquo;' ); ?>
            </div>
        </div>
	</div>
</div>