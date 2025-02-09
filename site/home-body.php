
<!-- WHAT IS RAMADAN -->
<section id="description" class="section gray-background">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">What is <span>Ramadan</span>?</h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
                    <p>
                        Ramadan is one of the five requirements (or pillars) of Islam. During each of its 30 days, Muslims
                        are obligated to fast from dawn until sunset. During this time they are supposed to abstain from
                        food, drinking liquids, smoking, and sexual relations.
                    </p>
                    <p>
                        In Tunisia, women typically spend the afternoons preparing a big meal. At sunset, families often
                        gather to break the fast. Traditionally the families break the fast with a drink of water, then
                        three dried date fruits, and a multi-course meal. After watching the new Ramadan TV series, men
                        (and some women) go out to coffee shops where they drink coffee, and smoke with friends until late
                        into the night.
                    </p>
                    <p>
                        Though many Tunisians have stopped fasting in recent years, and lots of Tunisians are turned off
                        by the hypocrisy, increased crime rates, and rudeness that is pervasive through the month, lots
                        of Tunisians become more serious about religion during this time. Many attend the evening prayer
                        services and do the other ritual prayers. Some even read the entire Quran (about a tenth the length
                        of the Bible). This sincere seeking makes it a strategic time for us to pray for them.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="item-boxes wow fadeInDown" data-wow-delay="0.4s">
                    <div class="shot-item">
                        <img src="<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>img/portfolio/img1.jpg" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Services Section End -->


<!-- SIGN UP TO PRAY -->
<section id="features" name="sign_up" class="section" data-stellar-background-ratio="0.2">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Sign Up to <span>Pray</span></h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
            <?php
            $dt_ramadan_selected_campaign_magic_link_settings = get_option( 'dt_ramadan_selected_campaign_magic_link_settings' );
            if ( empty( $dt_ramadan_selected_campaign_magic_link_settings ) ) :?>
                <p style="margin:auto">Choose campaign in settings <a href="<?php echo esc_html( admin_url( 'admin.php?page=dt_porch_template&tab=general' ) );?>">here</a></p>
            <?php else :
                dt_24hour_campaign_shortcode(
                    $dt_ramadan_selected_campaign_magic_link_settings
                );
            endif;
            ?>
        </div>
    </div>
</section>
<!-- Features Section End -->

<!-- BLUE COUNTER ROW -->
<div class="counters section" data-stellar-background-ratio="0.5" >
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <div class="facts-item">
                        <div class="icon">
                            <i class="lnr lnr-calendar-full"></i>
                        </div>
                        <div class="fact-count">
                            <h3><span class="counter">30</span></h3>
                            <h4>Days</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="wow fadeInUp" data-wow-delay=".6s">
                    <div class="facts-item">
                        <div class="icon">
                            <i class="lnr lnr-user"></i>
                        </div>
                        <div class="fact-count">
                            <h3>720</h3>
                            <h4>Hours of Prayer</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="wow fadeInUp" data-wow-delay=".8s">
                    <div class="facts-item">
                        <div class="icon">
                            <i class="lnr lnr-heart"></i>
                        </div>
                        <div class="fact-count">
                            <h3>2880</h3>
                            <h4>Prayer Commitments</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Section End -->

<!-- Blog Section -->
<section id="blog" class="section">
    <!-- Container Starts -->
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">15-Minute <span>Prayer Fuel</span></h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            <p class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
            <p class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s"><a href="/prayer/list" class="btn btn-common btn-rm">View All</a></p>
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
