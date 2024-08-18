@extends('musgravegroup.base')

@section('title', $news->title)

@section('meta')
    <meta name="description" content="{{ Str::limit(strip_tags($news->content->content), 160) }}">
    <meta name="keywords" content="sustainability, {{ $news->title }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $news->title }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($news->content->content), 160) }}">
    <meta property="og:image" content="{{ asset($news->media->path) }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $news->title }}">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($news->content->content), 160) }}">
    <meta name="twitter:image" content="{{ asset($news->media->path) }}">
@endsection

@section('body-classes', 'post-template-default single single-post postid-20035 single-format-standard wp-custom-logo')

@section('style')
    <style>
        .sub-menu {
            display: none!important;
        }
        .menu-item-14986 {
            background: black!important;
        }
    </style>
@endsection

@section('content')
    <article id="post-20035"
             class="post-20035 post type-post status-publish format-standard has-post-thumbnail hentry category-news category-sustainability tag-building-sustainable-communities tag-centra tag-seai tag-supervalu tag-sustainability tag-sustainable-energy-authority-of-ireland">
        <div class="colour-block"></div>
        <header class="entry-header">
            <div class="container">
                <h1>{{ $news->title }}</h1>
            </div>
        </header>

        <div class="entry-content container aos-init aos-animate" data-aos="fade-up">
            <div class="blog-img aos-init aos-animate" data-aos="fade-in" data-aos-delay="350">
                <img width="300" height="209"
                     src="{{ asset($news->media->path) }}"
                     class="attachment-medium size-medium wp-post-image" alt="" decoding="async" fetchpriority="high"
                     sizes="(max-width: 300px) 100vw, 300px">
            </div>
            <div class="entry-meta aos-init aos-animate" data-aos="fade-in" data-aos-delay="350">
                <span class="posted-on">Posted on
                    <a href="{{ route('page.news.show', $news->url) }}" rel="bookmark">
                        <time class="entry-date published" datetime="{{ $news->created_at->toW3cString() }}">{{ $news->formatted_date }}</time>
                        <time class="updated" datetime="{{ $news->updated_at->toW3cString() }}">{{ $news->formatted_date }}</time>
                    </a>
                </span>
            </div>
            <div data-aos="fade-in" data-aos-delay="350" class="aos-init aos-animate">
                {!! $news->content->content !!}
                @include('musgravegroup.components.share')
            </div>
        </div>
    </article>
    <section class="trending-articles">
        <div class="container">
            <h2>Posts you might be interested in</h2>
            <div class="slide">
                @foreach($newsSus as $item)
                    <div class="block news-color">
                        <img width="300" height="200"
                             class="attachment-medium size-medium wp-post-image lazyload" alt=""
                             decoding="async" loading="lazy"
                             data-sizes="(max-width: 300px) 100vw, 300px"
                             src="{{ asset($item->media->path) }}"
                             style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;"/>
                        <noscript><img
                                width="300" height="200"
                                src="{{ asset($item->media->path) }}"
                                class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                loading="lazy"
                                sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                        <div class="colour-block"></div>
                        <div class="text">
                            <h3><a href="{{ route('page.news.show', $item -> url) }}">{{ $item -> title }}</a></h3>
                            <p>{{ $item -> small_description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
