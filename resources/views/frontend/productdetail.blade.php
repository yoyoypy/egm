@extends('frontend.layouts.else')

@section('meta')
         <title>{{$products->product_name}} | EGM</title>
         <meta name="title" content="{{$products->product_name}}">
         <meta name="keyword" content="{{$products->product_name}}">
         <meta name="description" content="{!!$products->product_description!!}">
@endsection

@section('content')
<!-- Page title -->
<section id="page-title" style="background-image:url({{ asset('frontend/images/.jpg')}});">
    <div class="container">
        <div class="page-title">
            <div data-animate="fadeIn">
                <h1>{{$products->product_name}}</h1>
            </div>
            <div class="portfolio-attributes style1">
                <div class="attribute" data-animate="fadeInUp" data-animate-delay="1400">
                    <strong>Category:</strong> {{$products->Category->category}} </div>
            </div>
            <div class="portfolio-share" data-animate="fadeIn" data-animate-delay="1600">
                <h4>Share this product</h4>
                <div class="align-center">
                    {{-- <a class="btn btn-xs btn-slide btn-light" href="#">
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
                    </a> --}}
                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                        <i class="icon-mail"></i>
                        <span>Mail</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Page title -->
<!-- Content -->
<section id="page-content" class="p-b-0">
    <div class="container">
        <div class="grid-layout grid-2-columns" data-item="grid-item" data-margin="30" data-lightbox="gallery">
            {{-- <div class="grid-item large-width">
                <a title="Saiba Chair" data-lightbox="gallery-image" href="images/portfolio/project/10.jpg">
                    <img src="images/portfolio/project/10.jpg">
                </a>
            </div> --}}
            @foreach ( $products->Galleries as $gallery )
            <div class="grid-item">
                <a title="{{$products->product_name}}" data-lightbox="gallery-image" href="../product/{{$products->slug}}">
                    <img src="{{$gallery->photo}}">
                </a>
            </div>
            @endforeach
        </div>
        <hr class="space">
        <div class="row m-b-40">
            <div class="col-lg-8 center">
                <div class="project-description">
                    <h2>{{$products->product_name}}</h2>
                    <h3>{!!$products->product_description!!}</h3>
                </div>
                @forelse ($products->Video as $video)
                    <div class="grid-item">
                        <video height="450" controls>
                                <source src="{{ url($video->video) }}" type="video/mp4">
                                No video support.
                        </video>
                    </div>
                @empty
                @endforelse
                <div class="portfolio-attributes">
                    <div class="attribute"><strong>Category:</strong> {{$products->Category->category}}</div>
                </div>
                <div> <a href="https://wa.me/6281806129287?text=Hallo,%20saya%20tertarik%20dengan%20produk%20{{$products->product_name}}" class="btn btn-dark btn-outline"><i class="fab fa-whatsapp"></i> Ask us for product detail</a>
                @forelse ( $products->Brochures as $brochure )
                <a href="{{ $brochure->brochure }}" class="btn btn-primary" style="float: right"><i class="fa fa-download"></i>  Download Product Brochure Here</a></div>
                @empty

                @endforelse
            </div>
        </div>
    </div>
    <div class="post-navigation">
        <a href="/" class="post-all">
            <i class="icon-grid"></i>
        </a>
    </div>
</section> <!-- end: Content -->

@endsection
