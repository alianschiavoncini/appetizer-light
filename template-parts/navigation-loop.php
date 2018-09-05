<?php
/**
 * Template part for retrieve paginated link for archive post pages
 *
 * @link https://codex.wordpress.org/Function_Reference/paginate_links
 *
 * @package WordPress
 * @subpackage Appetizer_Light
 * @since 1.0.0
 * @version 1.0.0
 * @author Alian Schiavoncini <alian@alian.it>
 */

global $the_query;

$args = false;
if ( isset($the_query) ) {
	$args = array( 'total' => $the_query->max_num_pages );
}

$paginate_links = paginate_links( $args );

if ( !empty($paginate_links) ) {
?>
<div class="navigation-loop">
	<div class="row">
        <div class="col">
			<?php echo $paginate_links; ?>
        </div>
	</div>
</div>
<?php
}
