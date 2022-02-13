<!doctype html>
<html class="no-js" lang="zxx">
<?php

include_once('includes/header.php');
include_once('includes/global.php');

?>
    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Our Services</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Our Services</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Our Services</span>
                            <h2>What We Can Do For You</h2>

                            <p> <strong> Each individual client and shipment means a lot to us.</strong> <br>
We aim to make our clients feel well-treated and special, which is the reason we always 
offer personal and customer-oriented service. Being our client should be a safe, quality 
experience.
Don't hesitate to call us with any questions. To us, all questions are 
relevant – we are here to provide solutions tailored to your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-shipped"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Land Transport</a></h5>
                                <p> <?php echo $land ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-ship"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Ship Transport</a></h5>
                                <p> <?php echo $ship ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Air Transport</a></h5>
                                <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Air Transport</a></h5>
                                <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-shipped"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Land Transport</a></h5>
                                <p> <?php echo $land ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-ship"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Ship Transport</a></h5>
                                <p> <?php echo $ship ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Area End -->
       
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area footer-bg">
           <div class="container">
                <div class="footer-top footer-padding">
                    <!-- footer Heading -->
                    <div class="footer-heading">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-8 col-md-8">
                                <div class="wantToWork-caption wantToWork-caption2">
                                    <h2>We Understand The Importance Approaching Each Work!</h2>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <span class="contact-number f-right">+ 1 212-683-9756</span>
                            </div>
                        </div>
                    </div>
                    <?php

include_once('includes/footer.php');


?>
        
    </body>
</html>