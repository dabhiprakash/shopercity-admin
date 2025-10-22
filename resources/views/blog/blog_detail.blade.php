@extends('layouts.master')
@section('content')
    <section class="blog-section section-b-space">
        <div class="container box_container">
            <div class="title d-flex mb-4">
                <h2>{{ $blog->title }}</h2>
            </div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 ratio_50">
                    <div class="blog-detail-image rounded-3 mb-3">
                        <img src="{{ ( isset($blog->image) ? asset_url('storage/'.$blog?->image) : asset_url('images/blog.jpg')) }}" class="bg-img blur-up lazyload" alt="">
                    </div>
                    <div class="blog_info">
                        <span> {{ date('M d, Y',strtotime($blog->created_at)) }}</span>
                        <span>Posted by Admin</span>
                    </div>
                    <div class="blog-detail-contain">
                        {!! $blog?->description  !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container box_container">
        <hr>
    </div>
    <section class="blog-section pb-5">
        <div class="container box_container">
            <div class="title d-flex">
                <h2>Recent Blog Posts</h2>
                <a href="{{ url('blog') }}" class="read_more">
                    View More
                    <img src="{{ asset_url('images/icons/more.svg') }}" class="read-more-icon" alt="">
                </a>
            </div>
            <div class="row g-4">
                <div class="col-xxl-12 col-xl-8 col-lg-7 order-lg-2">
                    <div class="row g-4 ratio_60">
                        @if($blogs->isNotEmpty())
                            @foreach($blogs as $blog)
                                <div class="col-xxl-4 col-sm-6">
                                    <div class="blog-box">
                                        <div class="blog-image">
                                            <a href="{{ url('/blog-detail/'.$blog->slug) }}">
                                                <img src="{{ ( isset($blog->image) ? asset_url('storage/'.$blog?->image) : asset_url('images/blog.jpg')) }}" class="bg-img blur-up lazyload" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-contain">
                                            <a href="{{ url('/blog-detail/'.$blog->slug) }}" class="mb-3 d-block">
                                                <h3>{{ $blog->title }}</h3>
                                                <p><?php echo substr($blog?->description, 0, 30); ?></p>
                                            </a>
                                            <a href="{{ url('/blog-detail/'.$blog->slug) }}" class="read_more" >
                                                Read More
                                                <img src="{{ asset_url('images/icons/more.svg') }}" class="read-more-icon" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
