<?php
/**
 * The template for displaying the main footer content.
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
    <!-- footer-main -->
    <section class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="social-icons list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a>
                        </li>
                    </ul>
                    <p class="copyright"><?php esc_html_e( '&copy; Copyright', 'appetizer-light' ); ?> <?php echo date_i18n( esc_html__( 'Y', 'appetizer-light' ) ); ?> <?php bloginfo('name'); ?>. <?php esc_html_e( 'All Rights Reserved', 'appetizer-light' ); ?>.</p>
                    <p class="credits"><?php esc_html_e( 'WordPress Theme by', 'appetizer-light' ); ?> <a href="https://www.alian.it" class="credits-link" target="_blank">Alian Schiavoncini</a></p>
                </div>
            </div>          
        </div>
    </section> <!-- /footer-main -->
