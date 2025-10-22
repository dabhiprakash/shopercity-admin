@extends('layouts.master')
@section('content')
<section class="blog-section section-b-space">
        <div class="container box_container">
            <div class="page_title">
                <h2>Blog Posts</h2>
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
                                                <p><?php echo substr($blog?->meta_description, 0, 30); ?></p>
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
