<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buddhist
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Buddhist Tour | Buddhist Travel in India | Buddhist Tour Operators Delhi">
    <meta name="keyword" content="travel, tourism, agency, tourist">
    <meta name="author" content="Buddhist Tour">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	 <!--Preloader Start-->
    <div class="preloader">
        <div class="loading-text">
            <span class="loading-text-words" data-preloader="L">L</span>
            <span class="loading-text-words" data-preloader="O">O</span>
            <span class="loading-text-words" data-preloader="A">A</span>
            <span class="loading-text-words" data-preloader="D">D</span>
            <span class="loading-text-words" data-preloader="I">I</span>
            <span class="loading-text-words" data-preloader="N">N</span>
            <span class="loading-text-words" data-preloader="G">G</span>
        </div>
    </div>
    <!--Preloader End-->
	
	
	   <!-- Header Area Start -->
    <header class="peulis-header-area">
        <!-- Header Top Area Start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="header-top-left">
                            <p>
                                <i class="fa fa-envelope"></i>
                               <?php echo get_theme_mod( 'Email_setting', '' ); ?>
                            </p>
                            <p>
                                <i class="fa fa-phone"></i>
                                <?php echo get_theme_mod( 'phone_number_setting', '' ); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="header-top-right">
                            <div class="header-top-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Area End -->

        <!-- Main Header Area Start -->
        <div class="main-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_inn">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="site-logo">
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
                                    <!-- Responsive Menu Start -->
                                    <div class="peulis-responsive-menu"></div>
                                    <!-- Responsive Menu End -->
                                </div>
                                <div class="col-lg-9">
                                    <div class="mainmenu">
                                        <nav>
											 <?php
													wp_nav_menu( array(
														'menu'              => 'header-menu',
				                                        'theme_location'    => 'footer-menu',
														'depth'             => 2,
														'container'         => '',
														'container_class'   => '',
														'container_id'      => '',
														'menu_class'        => 'menuzord-menu',
														'menu_id'           => "navigation_menu",
														'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
														'walker'            => new WP_Bootstrap_Navwalker(),
													) );
												?>
                                           </nav>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area End -->
    </header>
    <!-- Header Area End -->
	

	
	<div id="content" class="site-content">
