<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buddhist
 */

?>

	</div><!-- #content -->

     <!-- Footer Area Start -->
    <footer class="peulis-footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer">
							<?php dynamic_sidebar( 'footer_one' ); ?>
                            <div class="footer-logo">
                                <a href="<?php get_bloginfo( 'url' ) ;?>">
											<?php 
											$custom_logo_id = get_theme_mod( 'custom_logo' );
								$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								if ( has_custom_logo() ) {
										echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
								} else {
										echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
								}
											?>
                                           
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer">
                            <h3>About Us</h3>
                            <ul>
                                <li><a href="#">Why Us</a></li>
                                <li><a href="#">Why Touring</a></li>
                                <li><a href="#">Reviews</a></li>
                                <li><a href="#">Travel Insurance</a></li>
                                <li><a href="#">Programme</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Client Area</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Author Hangout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer">
                            <h3>Pay Safely</h3>
                            <p>Eiusmod tempor incididunt utbor etian dolm magna aliqua enim minim</p>
                            <div class="payment_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creditcard-logo.png" alt="Payment Card" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom-box">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="footer-bottom-left">
                                        <p>&copy; Copyright Buddhist Tour  - By <a href="#">Designer</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="footer-bottom-left">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
