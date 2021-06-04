@extends('frontend.layouts.default')

@section('content')
<!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
            <!-- Slide 1 -->
            <div class="slide kenburns" data-bg-image="{{ asset('frontend/images/sliderhome.jpg')}}">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <h1 data-caption-animate="zoom-out">WELCOME TO <br>ENDO GLOBAL MEDIKATAMA</h1>
                        <p>Produsen berbagai jenis lampu jalan yang dilengkapi dengan fitur tambahan yang menarik seperti Mobile Network, Smart Lighting, Environment Monitoring, Camera, LED, Emergent Broadcast, Electrombile Carging.</p>
                        <div><a href="#" class="btn btn-primary scroll-to">Our Product</a></div>
                        </span>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 1 -->
            <!-- Slide 2 -->
            <div class="slide" data-bg-video="{{ asset('frontend/video/slider1.mp4')}}">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-left text-light">
                        <!-- Captions -->
                        <h1>GREEN ENERGY</h1>
                        <p class="text-small">Kami menyediakan solusi kebutuhan PJU Pintar Tenaga Surya, PJU Solar Cell, Lampu Jalan LED, PJU Hibrida Surya dan Angin, dan aplikasi tenaga surya.</p>
                        <div><a href="contact-us" class="btn btn-primary scroll-to">Reach Us</a></div>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->
        </div>
        <!--end: Inspiro Slider -->
        <!-- WELCOME -->
        <section id="welcome" class="p-b-0">
            <div class="container">
                <div class="heading-text heading-section text-center m-b-40" data-animate="fadeInUp">
                    <h2>WELCOME TO THE WORLD OF RENEWABLE ENERGY</h2>
                    <span class="lead">Create A Good Environment, Beautiful Nature, and rare feathers!</span>
                </div>
                <div class="row" data-animate="fadeInUp">
                    <div class="col-lg-12">
                        <img class="img-fluid" src="{{ asset('frontend/images/parallaxhome.jpg')}}" alt="#">
                    </div>
                </div>
            </div>
        </section>
        <!-- end: WELCOME -->
        <!-- WHAT WE DO -->
        <section class="background-grey">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2>WHAT WE DO</h2>
                    <span class="lead">Green energy start from us!</span>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div data-animate="fadeInUp" data-animate-delay="0">
                            <h4>Sales</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="fadeInUp" data-animate-delay="200">
                            <h4>Maintenance</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="fadeInUp" data-animate-delay="400">
                            <h4>Customization</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="fadeInUp" data-animate-delay="600">
                            <h4>Integration</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="fadeInUp" data-animate-delay="800">
                            <h4>Installation</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="fadeInUp" data-animate-delay="1000">
                            <h4>Consultation</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WHAT WE DO -->

        <!-- COUNTERS -->
        <section class="text-light p-t-150 p-b-150 " data-bg-parallax="{{ asset('frontend/images/parallaxhome2.jpg')}}">
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>SERVICES</h2>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="0">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-plug"></i></a>
                            </div>
                            <h3>Powerful template</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="200">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-desktop"></i></a>
                            </div>
                            <h3>Flexible Layouts</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="400">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-cloud"></i></a>
                            </div>
                            <h3>Retina Ready</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="far fa-lightbulb"></i></a>
                            </div>
                            <h3>Fast processing</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="800">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-trophy"></i></a>
                            </div>
                            <h3>Unlimited Colors</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1000">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-thumbs-up"></i></a>
                            </div>
                            <h3>Premium Sliders</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1200">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-rocket"></i></a>
                            </div>
                            <h3>Modern Design</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1400">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-flask"></i></a>
                            </div>
                            <h3>Clean Modern Code</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1600">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-umbrella"></i></a>
                            </div>
                            <h3>Free Updates & Support</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: COUNTERS -->
        <!-- BLOG -->
        <section class="content background-grey">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2>OUR BLOG</h2>
                    <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus,
                        orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id
                        molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare
                        orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span>
                </div>
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/blog/12.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/blog/17.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Science</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/blog/18.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Science</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                </div>
            </div>
        </section>
        <!-- end: BLOG -->
        <!-- CLIENTS -->
        <section class="p-t-60">
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>OUR PARTNER</h2>
                    <span class="lead">Our awesome partner we've had to make green energy! </span>
                </div>
                <div class="carousel client-logos" data-items="4" data-items-sm="4" data-items-xs="3" data-items-xxs="2" data-margin="20" data-arrows="false" data-autoplay="true" data-autoplay="3000" data-loop="true">
                    <div>
                        <a href="#"><img alt="" src="{{ asset('frontend/images/clients/1.png')}}"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="{{ asset('frontend/images/clients/2.png')}}"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="{{ asset('frontend/images/clients/3.png')}}"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="{{ asset('frontend/images/clients/4.png')}}"> </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: CLIENTS -->
@endsection
