<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Multi-purpose Business html5 landing page">
    <link href="{{asset('images/favicon/favicon.png')}}" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>

    <!-- Stylesheets
    ============================================= -->
    <link href="{{asset('css/external.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<!--<link href="{{asset('css/style.css')}}" rel="stylesheet">-->
    <link rel="stylesheet/less" type="text/css" href="{{asset('less/style.less')}}"/>
    <script src="{{asset('js/less.js')}}" type="text/javascript"></script>



    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Sware | SaaS & Software Html5 Landing Page</title>
</head>

<body class="body-scroll">
<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="wrapper clearfix">

    @include('layouts.assets.header')

    @yield('slider')

    @yield('content')

    <!-- Video #1
    ============================================= -->
    <section id="video1" class="video-button bg-white">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-1 mb-80 text--center wow fadeInUp" data-wow-duration="1s">
                        <h2 class="heading--title">How it works ?</h2>
                        <p class="heading--desc">we shows only the best websites, portfolios ans landing pages built completely with passion, simplicity & creativity !</p>
                        <div class="divider--line divider--center"></div>
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
                    <div class="video--content">
                        <div class="bg-section">
                            <img src="{{asset('images/background/bg-2.jpg')}}" alt="Background"/>
                        </div>
                        <div class="video--button">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                <i class="fa fa-play"></i>
                            </a>
                        </div><!-- .video--button end -->
                    </div><!-- .video--content end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- #video1 end -->

    <!-- reviews
    ============================================= -->
    <section id="reviews" class="section reviews pb-70">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-1 mb-80 text--center wow fadeInUp" data-wow-duration="1s">
                        <h2 class="heading--title">What users say ?</h2>
                        <p class="heading--desc">we shows only the best websites, portfolios ans landing pages built completely with passion, simplicity & creativity !</p>
                        <div class="divider--line divider--center"></div>
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <!--  Testimonial #1  -->
                    <div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
                        <div class="testimonial--img">
                            <img src="{{asset('images/testimonials/1.png')}}" alt="author">
                        </div>
                        <div class="testimonial--body">
                            <p>“Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat cupida non proident sunt in culpa qui officia deserunt.”</p>
                            <div class="testimonial--author">
                                <h5>Mark Smith</h5>
                            </div>
                        </div>
                    </div>
                </div><!-- .col-md-6 End -->

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <!--  Testimonial #1  -->
                    <div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
                        <div class="testimonial--img">
                            <img src="{{asset('images/testimonials/2.png')}}" alt="author">
                        </div>
                        <div class="testimonial--body">
                            <p>“Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat cupida non proident sunt in culpa qui officia deserunt.”</p>
                            <div class="testimonial--author">
                                <h5>Jessy Arthur</h5>
                            </div>
                        </div>
                    </div>
                </div><!-- .col-md-6 End -->

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <!--  Testimonial #1  -->
                    <div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
                        <div class="testimonial--img">
                            <img src="{{asset('images/testimonials/3.png')}}" alt="author">
                        </div>
                        <div class="testimonial--body">
                            <p>“Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat cupida non proident sunt in culpa qui officia deserunt.”</p>
                            <div class="testimonial--author">
                                <h5>Maya Jonson</h5>
                            </div>
                        </div>
                    </div>
                </div><!-- .col-md-6 End -->

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <!--  Testimonial #1  -->
                    <div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
                        <div class="testimonial--img">
                            <img src="{{asset('images/testimonials/4.png')}}" alt="author">
                        </div>
                        <div class="testimonial--body">
                            <p>“Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat cupida non proident sunt in culpa qui officia deserunt.”</p>
                            <div class="testimonial--author">
                                <h5>Steve Martin</h5>
                            </div>
                        </div>
                    </div>
                </div><!-- .col-md-6 End -->
            </div><!-- .row End -->
        </div>
        <!-- .container End -->
    </section>
    <!-- #reviews End-->

    <!-- Pricing Table #1
    ============================================= -->
    <section id="pricing" class="section pricing bg-white">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-1 mb-80 text--center wow fadeInUp" data-wow-duration="1s">
                        <h2 class="heading--title">Pricing plans</h2>
                        <p class="heading--desc">we shows only the best websites, portfolios ans landing pages built completely with passion, simplicity & creativity !</p>
                        <div class="divider--line divider--center"></div>
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <!-- Pricing Packge #1
                ============================================= -->
                <div class=" col-xs-12 col-sm-4 col-md-4 price-table wow fadeInUp" data-wow-duration="1s">
                    <div class="pricing-panel">
                        <!--  Pricing heading  -->
                        <div class="pricing--heading text--center">
                            <h4>Starter</h4>
                            <div class="pricing--heading">
                                <p>free</p>
                                <div class="pricing--desc">
                                    per month
                                </div>
                            </div>
                        </div>
                        <!--  Pricing body  -->
                        <div class="pricing--body">
                            <ul class="list-unstyled">
                                <li>Up to 4 users monthly</li>
                                <li>Limited updates</li>
                                <li><i class="lnr lnr-cross"></i></li>
                                <li><i class="lnr lnr-cross"></i></li>
                            </ul>
                            <a class="btn btn--secondary btn--bordered btn--rounded" href="#">Get Started</a>
                        </div>
                        <!--  Pricing Body  -->
                    </div>
                </div>
                <!-- .pricing-table End -->

                <!-- Pricing Packge #2
                ============================================= -->
                <div class=" col-xs-12 col-sm-4 col-md-4 price-table wow fadeInUp" data-wow-duration="1s">
                    <div class="pricing-panel pricing-active">
                        <!--  Pricing heading  -->
                        <div class="pricing--heading text--center">
                            <h4>Premium</h4>
                            <div class="pricing--heading">
                                <p><span class="currency">$</span>39</p>
                                <div class="pricing--desc">
                                    per month
                                </div>
                            </div>
                        </div>
                        <!--  Pricing body  -->
                        <div class="pricing--body">
                            <ul class="list-unstyled">
                                <li>Up to 10 users monthly</li>
                                <li>Unlimited updates</li>
                                <li>A/B Testing</li>
                                <li>Email Integration</li>
                            </ul>
                            <a class="btn btn--primary btn--rounded" href="#">Get Started Now</a>
                        </div>
                        <!--  Pricing Body  -->
                    </div>
                </div>
                <!-- .pricing-table End -->

                <!-- Pricing Packge #3
                ============================================= -->
                <div class=" col-xs-12 col-sm-4 col-md-4 price-table wow fadeInUp" data-wow-duration="1s">
                    <div class="pricing-panel">
                        <!--  Pricing heading  -->
                        <div class="pricing--heading text--center">
                            <h4>Company</h4>
                            <div class="pricing--heading">
                                <p><span class="currency">$</span>59</p>
                                <div class="pricing--desc">
                                    per month
                                </div>
                            </div>
                        </div>
                        <!--  Pricing body  -->
                        <div class="pricing--body">
                            <ul class="list-unstyled">
                                <li>Up to 30 users monthly</li>
                                <li>Unlimited updates</li>
                                <li>A/B Testing</li>
                                <li>Email Integration</li>
                            </ul>
                            <a class="btn btn--secondary btn--bordered btn--rounded" href="#">Get Started</a>
                        </div>
                        <!--  Pricing Body  -->
                    </div>
                </div>
                <!-- .pricing-table End -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #pricing1 end -->

    <!-- Newsletter #1
    ============================================= -->
    <section id="newsletter" class="section newsletter text-center">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="heading heading-1 mb-60 text--center wow fadeInUp" data-wow-duration="1s">
                        <h2 class="heading--title">Subscribe to get updates</h2>
                        <p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice elite sede eiusmod tempor incidide labeore dolore magna</p>
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <form class="mb-0 form-action wow fadeInUp" data-wow-duration="1s">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="E-mail address">
                            <span class="input-group-btn">
									<input type="submit" class="btn btn--primary" value="Subscribe" name="submit">
								</span>
                        </div>
                        <!-- .input-group end -->
                    </form>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #newsletter end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="footer footer-5">
        <!-- Copyrights
        ============================================= -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="footer--copyright">
                        <span>&copy; 2017 Sware, crafted With <i class="fa fa-heart"></i> by</span> <a href="http://themeforest.net/user/zytheme/portfolio?ref=zytheme">zytheme.com</a>
                    </div>
                </div><!-- .col-md-6 end -->
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="footer--social text-right">
                        <a class="account-twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="account-facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="account-vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                        <a class="account-instagram" href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div><!-- .col-md-6 end -->

            </div><!-- .row end -->
        </div>
        <!-- .container end -->
    </footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
</body>

</html>