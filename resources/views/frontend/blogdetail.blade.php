@extends('frontend.layouts.else')

@section('content')
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <!-- content -->
            <div class="content col-lg-9">
                <!-- Blog -->
                <div id="blog" class="single-post">
                    <!-- Post single item-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-item-description">
                                <h2>{{$blog->title}}</h2>
                                <div class="post-meta">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$blog->created_at}}</span>
                                    <div class="post-meta-share">
                                        <a class="btn btn-xs btn-slide btn-facebook" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div>
                                </div>
                                {!! $blog->description !!}
                            <div class="post-navigation">
                                {{-- <a href="blog-single-slider.html" class="post-prev">
                                    <div class="post-prev-title"><span>Previous Post</span>Post with a slider and lightbox</div>
                                </a> --}}
                                <a href="/" class="post-all">
                                    <i class="icon-grid"> </i>
                                </a>
                                {{-- <a href="blog-single-video.html" class="post-next">
                                    <div class="post-next-title"><span>Next Post</span>Post with YouTube Video</div>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- end: Post single item-->
                </div>
            </div>
            <!-- end: content -->
    </div>
</section>

@endsection
