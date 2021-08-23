<?php
$args = array(
    'post_type' => PORCH_LANDING_POST_TYPE,
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'orderby' => 'post_date',
    'order' => 'DESC'
);
$today = new WP_Query( $args );

$args = array(
    'post_type' => PORCH_LANDING_POST_TYPE,
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'post_title',
    'order' => 'DESC'
);
$list = new WP_Query( $args );

?>




<!-- TODAYS POST Section -->
<section id="contact" class="section">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
                <div class="contact-block">
                    <div class="section-header">
                        <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Today's Prayer <span>Fuel</span></h2>
                        <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                    </div>
                    <div class="row">
                        <?php foreach($today->posts as $item ) : ?>
                            <?php echo wp_kses_post( $item->post_content ) ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- LIST OF POSTS Section -->
<section id="blog" class="section">
    <!-- Container Starts -->
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">All <span>Days</span></h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            <p class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
            <?php foreach($list->posts as $item ) : ?>
            <?php $public_key = get_post_meta( $item->ID, PORCH_LANDING_META_KEY, true ); ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item-img">
                        <a href="/prayer/fuel/<?php echo $public_key ?>">
                            <img src="<?php echo esc_url( trailingslashit( plugin_dir_url( __DIR__ ) ) ) ?>landing-pages/img/300x1.png" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3>
                            <a href="#"><?php echo $item->post_title ?></a>
                        </h3>
                        <div class="meta-tags">
                            <span class="date"><i class="lnr lnr-calendar-full"></i>on <?php echo $item->post_date ?></span>
                        </div>
                        <p>
                            <?php echo wp_kses_post( $item->post_excerpt ) ?>
                        </p>
                        <a href="/prayer/fuel/<?php echo $public_key ?>" class="btn btn-common btn-rm">Read</a>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- blog Section End -->

<!-- Footer Section Start -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social-icons wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <ul>
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="site-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <p>All copyrights reserved &copy;  <script>document.write(new Date().getFullYear())</script></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="lnr lnr-arrow-up"></i>
</a>

<div id="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
