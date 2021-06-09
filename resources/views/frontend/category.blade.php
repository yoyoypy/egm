@extends('frontend.layouts.else')

@section('content')
<!-- Page title -->
<section id="page-title" class="text-light" data-bg-parallax="{{ asset('frontend/images/parallaxhome2.jpg')}}">
    <div class="container">
        <div class="page-title">
            <h1>Our Products</h1>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="/">Home</a>
                </li>
                <li><a href="../product">Product</a>
            </ul>
        </div>
    </div>
</section>
<!-- end: Page title -->

<!-- Content -->
<section id="page-content">
    <div class="container">
        <!-- Portfolio Filter -->
        <nav class="grid-filter gf-outline" data-layout="#portfolio">
            <ul>
                <li class="active"><a href="{{$categories->slug}}" data-category="{{$categories->slug}}">{{$categories->category}}</a></li>
            </ul>
        </nav>
        <!-- end: Portfolio Filter -->
        <!-- Portfolio -->
        <div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="20">
            <!-- portfolio item -->
            @foreach ( $products as $product )
            <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-slider">
                        <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                            @foreach ( $product->Galleries as $gallery )
                                <a href="product/{{$product->slug}}"><img src="{{$gallery->photo}}" alt=""></a>
                            @endforeach
                        </div>
                    </div>
                    <div class="portfolio-description">
                        <a href="product/{{$product->slug}}">
                            <h3>{{$product->product_name}}</h3>
                            <span>{{$product->Category->category}}</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end: portfolio item -->
        </div>
        <!-- end: Portfolio -->
    </div>
</section> <!-- end: Content -->
@endsection
