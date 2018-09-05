<?php
/**
 * The template for displaying the footer sidebars.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Appetizer_Light
 * @since 1.0.0
 * @version 1.0.0
 * @author Alian Schiavoncini <alian@alian.it>
 */

$sidebars = array();

for ($i = 1; $i <= 3; $i++) {
	$sidebar_id = 'footer-column-' . $i;
	if ( is_active_sidebar( $sidebar_id ) ) { $sidebars[] = $sidebar_id; }
}
$n = count($sidebars);

if ($n > 0) {
	
	switch($n) {
		case 3 :
			$class_col = 'col col-sm-12 col-md-4';
			break;
		case 2 :
			$class_col = 'col col-sm-12 col-md-6';
			break;
		default :
			$class_col = 'col col-sm-12 col-md-12';
		
	}
?>
    <!-- footer-columns -->
    <section class="footer-columns">	
        <div class="container">
            <div class="row">
            <?php foreach($sidebars as $sidebar) { ?>
                <div class="<?php echo $class_col; ?>">
                    <div id="<?php echo $sidebar; ?>" class="footer-column">
						<?php dynamic_sidebar( $sidebar ); ?>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section> <!-- /footer-columns -->
<?php
}
