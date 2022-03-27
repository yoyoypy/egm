@extends('frontend.layouts.else')

@section('meta')
         <title>About Us | EGM</title>
         <meta name="description" content="PT. Endo Global Medikatama merupakan sebuah perusahaan yang bergerak pada bidang Konstruksi Mekanikal, Elektrikal, dan Supplier. Menyediakan solusi kebutuhan PJU Pintar Tenaga Surya, PJU Solar Cell, Lampu Jalan LED, PJU Hibrida Surya dan Angin, dan aplikasi tenaga surya lainnya dengan kualitas yang terjamin, layanan prima, harga yang kompetitif. Selain itu, PJU sudah dilengkapi dengan fitur-fitur pintar yang dapat memudahkan para pengguna jalan.">
@endsection

@section('content')
<!-- Inspiro Slider -->
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">
    <!-- Slide 2 -->
    <div class="slide kenburns" style="background-image:url({{ asset('frontend/images/parallaxhome2.jpg')}});">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">
                <!-- Captions -->
                <span class="strong">Who we are</span>
                <h1>PT. Endo Global Medikatama</h1>
                <!-- end: Captions -->
            </div>
        </div>
    </div>
    <!-- end: Slide 2 -->

</div>
<!--end: Inspiro Slider -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="heading-text heading-section">
                    <h2>THE COMPANY</h2>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">PT. Endo Global Medikatama merupakan sebuah perusahaan yang bergerak pada bidang Konstruksi Mekanikal, Elektrikal, dan Supplier. Menyediakan solusi kebutuhan PJU Pintar Tenaga Surya, PJU Solar Cell, Lampu Jalan LED, PJU Hibrida Surya dan Angin, dan aplikasi tenaga surya lainnya dengan kualitas yang terjamin, layanan prima, harga yang kompetitif. Selain itu, PJU sudah dilengkapi dengan fitur-fitur pintar yang dapat memudahkan para pengguna jalan.<br><br>Dengan menggunakan Smart PJU dengan sumber tenaga energi matahari yang diserap oleh modul surya, sumber energi yang tidak pernah habis dan melimpah. Pemanfaatannya yang ramah lingkungan tentunya bisa menghemat listrik.</div>

                    <div class="col-lg-6">PT. Endo Global Medikatama menjadi produsen berbagai jenis lampu jalan yang dilengkapi dengan fitur tambahan yang menarik seperti Mobile Network, Smart Lighting, Environment Monitoring, Camera, LED, Emergent Broadcast, Electrombile Carging. Kini saat berevolusi dengan menggunakan Smart PJU Tenaga Surya. Karena dukungan tenaga ahli yang handal dan profesional dalam perusahaan. Kami berupaya untuk memberikan pelayanan yang terbaik dan akan selalu siap untuk memenuhi kebutuhan Anda.</div>

                </div>
            </div>

        </div>
    </div>
</section>


    <div class="container">
        <div class="heading-text heading-section">
            <h2>WHY CHOOSE US</h2>
        </div>
    </div>
<section class="box-fancy section-fullwidth text-light p-b-0">
    <div class="row">
        <div style="background-color:#0278ae" class="col-lg-4">
            <h1 class="text-lg text-uppercase">01.</h1>
            <h3>PRODUK BERKUALITAS</h3>
            <span>Kami selalu memberikan pelayanan terbaik untuk semua konsumen kami.</span>
        </div>

        <div style="background-color:#409cc6" class="col-lg-4">
            <h1 class="text-lg text-uppercase">02.</h1>
            <h3>PELAYANAN TERBAIK</h3>
            <span>Kami memiliki standar produk yang berkualitas dan memiliki banyak kelebihan.</span>
        </div>

        <div style="background-color:#07bade" class="col-lg-4">
            <h1 class="text-lg text-uppercase">03.</h1>
            <h3>HARGA TERBAIK</h3>
            <span>Kami memiliki harga yg bersaing dengan kualitas produk yang terbaik.</span>
        </div>
    </div>
</section>

{{-- <section class="background-grey">
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>OUR TEAM</h2>
            <span class="lead">Create amaThe most happiest time of the day!.</span>
        </div>
        <div class="row team-members team-members-shadow m-b-40">
            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="images/team/6.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Alea Smith</h3>
                        <span>Software Developer</span>
                        <p>The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="#">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                <i class="icon-mail"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="images/team/7.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Ariol Doe</h3>
                        <span>Software Developer</span>
                        <p>The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="#">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                <i class="icon-mail"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="images/team/8.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Emma Ross</h3>
                        <span>Software Developer</span>
                        <p>The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="#">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                <i class="icon-mail"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <div class="team-image">
                        <img src="images/team/9.jpg">
                    </div>
                    <div class="team-desc">
                        <h3>Victor Loda</h3>
                        <span>Software Developer</span>
                        <p>The most happiest time of the day!. Praesent tristique hendrerit ex ut laoreet. </p>
                        <div class="align-center">
                            <a class="btn btn-xs btn-slide btn-light" href="#">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                <i class="icon-mail"></i>
                                <span>Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{--<section>
    <div class="container">
        <div class="heading-text text-center">
            <h2>What people are saying!</h2>
            <p class="lead text-center">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo.</p>
        </div>
        <!-- Testimonials -->
         <div class="carousel arrows-visibile testimonial testimonial-single testimonial-left" data-items="1">

            <!-- Testimonials item -->
            <div class="testimonial-item">
                <img src="images/team/9.jpg" alt="">
                <p>Polo is by far the most amazing template out there! I literally could not be happier that I chose to buy this template!</p>
                <span>Alan Monre</span>
                <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->

            <!-- Testimonials item -->
            <div class="testimonial-item">
                <img src="images/team/9.jpg" alt="">
                <p>Polo is by far the most amazing template out there! I literally could not be happier that I chose to buy this template!</p>
                <span>Alan Monre</span>
                <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->

            <!-- Testimonials item -->
            <div class="testimonial-item">
                <img src="images/team/9.jpg" alt="">
                <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
                <span>Alan Monre</span>
                <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->

        </div>
        <!-- end: Testimonials -->
    </div>
</section>--}}

@endsection
