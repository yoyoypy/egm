@extends('frontend.layouts.else')

@section('content')
<section id="page-content">
    <div class="container">
        <!-- post content -->
        <!-- Page title -->
        <div class="page-title">
            <h1>Our Newest Blog</h1>
            <div class="breadcrumb float-left">
                <ul>
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="blog">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end: Page title -->
        <!-- Blog -->
        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
            <!-- Post item-->
            @forelse ( $blogs as $blog )
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ $blog->created_at }}</span>
                        <h2><a href="blog/{{ $blog->slug }}">{{ $blog->title }}
                            </a></h2>
                        <p>{!! $blog->description !!}</p>
                        <a href="blog/{{ $blog->slug }}" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            @empty
                <h1>No News Yet</h1>
            @endforelse
            <!-- end: Post item-->
        </div>
        <!-- end: Blog -->
        <!-- Pagination -->
        {{-- <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item active"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
        </ul> --}}
        <!-- end: Pagination -->
    </div>
    <!-- end: post content -->
</section> <!-- end: Content -->

@endsection
