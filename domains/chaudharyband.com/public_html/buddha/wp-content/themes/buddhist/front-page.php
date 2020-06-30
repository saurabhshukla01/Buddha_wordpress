<?php
/**
 * Template Name: Front Page
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package buddhist
 */

get_header(); ?>

  <!-- Slider Area Start -->
    <section class="peulis-slider-area overlay">
        <div class="peulis-slide owl-carousel">
		<?php
						$args = array(
							'post_type'      => 'slider',
							'posts_per_page' => '40', 							
							'orderby'        => 'meta_value',
						    'order'          => 'ASC'
						);
						$slider_query = new WP_Query($args);
					?>
					<?php
						if(have_posts()) : while ( $slider_query -> have_posts()):$slider_query->the_post();  
							$image_id = get_post_thumbnail_id();
							$image_url = wp_get_attachment_image_src($image_id, 'full', true);
							$image_alt_tag = get_post_meta($image_id, '_wp_attachment_image_alt', true);
					 ?>	
		
            <div class="slider-container slider-1">
                <div class="single-slider zoom">
				<img src="<?php echo $image_url[0]; ?>" alt="<?php echo $image_alt_tag; ?>"/>
                     <div class="banner-area" >
						<div class="banner-caption">
							<div class="container">
								<div class="row">
									<div class="col-md-12 col-sm-12 content-home">
										<div class="banner-welcome">
											<h4 class="text">travel with us</h4>
											<div class="caption-inner">
												<div class="ah-headline">
													<span class="typed-static">Enjoy</span>
													<span class="ah-words-wrapper">
														<b class="is-visible"> Adventure</b>
														<b> Holiday</b>
														<b> Mountain</b>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div> 
            <?php endwhile; endif; ?>
		 
        </div>  
    </section>
    <!-- Slider Area End -->


   


    <!-- Popular Tours Area Start -->
    <section class="peulis-popular-tours-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading">
                        <h2>Popular tours</h2>
                        <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. 
						  Aenan comdo igula eget. Aenean massa cum sociis Theme natoque.</p>
                    </div>
                </div>
            </div>
            <div class="row">
				 <?php
					$args = array('post_type' => 'Popular tours','posts_per_page' => '40');
					$slider_query = new WP_Query($args);
				  ?>
				 <?php
					if(have_posts()) : while ( $slider_query -> have_posts()):$slider_query->the_post();  
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id, 'full', true);
					$image_alt_tag = get_post_meta($image_id, '_wp_attachment_image_alt', true);
				 ?>	
                <div class="col-lg-4">
                    <div class="single-popular-tour">
                        <div class="popular-tour-image">
                            <img src="<?php echo $image_url[0]; ?>" alt="<?php echo $image_alt_tag; ?>" />
                            <div class="popular-tour-hover">
                            </div>
                        </div>
                        <div class="popular-tour-desc">
                            <div class="tour-desc-top">
                                <h3><a href="tour-details.html"><?php the_title(); ?></a></h3>
                                <div class="tour_duration">
                                    <p>
                                        <i class="fa fa-hourglass-half"></i>
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                               
                            </div>
                            <div class="tour-desc-bottom">
                                <div class="tour-details">
                                    <a href="tour-details.html"><i class="fa fa-flag"></i> Book Now</a>
                                </div>
                                <div class="tour-desc-price">
                                    <p><?php echo get_post_meta(get_the_ID(), 'Rs', TRUE); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <!-- Popular Tours Area End -->


    <!-- Awesome Tour Area Start -->
    <section class="peulis-awesome-tour-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="awesome-tour-box">
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube">
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                        <h2>Go Ahead & Make Awesome Tour</h2>
                        <p>Discover hidden wonders on trips With Peulis</p>
                        <a href="#" class="peulis-btn">Explore More <i class="fa fa-angle-double-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Awesome Tour Area End -->


    <!-- Destination Area Start -->
    <section class="peulis-destination-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading">
                        <h2>Destinations</h2>
                        <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Aenan comdo igula eget. Aenean massa cum sociis Theme natoque.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="destination-slider owl-carousel">
						 <?php
								$args = array('post_type' => 'Destinations','posts_per_page' => '40');
								$slider_query = new WP_Query($args);
							  ?>
							  <?php
								  if(have_posts()) : while ( $slider_query -> have_posts()):$slider_query->the_post();  
									  $image_id = get_post_thumbnail_id();
									  $image_url = wp_get_attachment_image_src($image_id, 'full', true);
									  $image_alt_tag = get_post_meta($image_id, '_wp_attachment_image_alt', true);
								?>	
									<div class="single-destination">
										<a href="destination-single.html">
											<div class="destination-image">
												 <img src="<?php echo $image_url[0]; ?>" alt="<?php echo $image_alt_tag; ?>" />
												<div class="destination-title">
													<h3><?php the_title(); ?></h3>
												</div>
											</div>
										</a>
									</div>
                       <?php endwhile; endif; ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Destination Area End -->


    


   


    <!-- Reviews Area Start -->
    <section class="peulis-reviews-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="reviews-slider owl-carousel">
						 <?php
								$args = array('post_type' => 'Testimonial','posts_per_page' => '40');
								$slider_query = new WP_Query($args);
							  ?>
							  <?php
								  if(have_posts()) : while ( $slider_query -> have_posts()):$slider_query->the_post();  
									  $image_id = get_post_thumbnail_id();
									  $image_url = wp_get_attachment_image_src($image_id, 'full', true);
									  $image_alt_tag = get_post_meta($image_id, '_wp_attachment_image_alt', true);
								?>	
                        <div class="single-reviews">
                            <div class="reviews-image">
                                <img src="<?php echo $image_url[0]; ?>" alt="<?php echo $image_alt_tag; ?>" />
                            </div>
                            <div class="reviews-text">
                                <div class="reviewer">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <p><?php the_content();?></p>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews Area End -->




<?php get_footer(); ?>