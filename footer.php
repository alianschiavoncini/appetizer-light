<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Appetizer_Light
 * @since 1.0.0
 * @version 1.0.0
 * @author Alian Schiavoncini <alian@alian.it>
 */
?>
    <!-- footer -->
    <footer>
        <?php get_template_part( 'template-parts/footer', 'columns' ); ?>
        <?php get_template_part( 'template-parts/footer', 'main' ); ?>
    </footer> <!-- /footer -->

    <?php wp_footer(); ?>

</body>
</html>