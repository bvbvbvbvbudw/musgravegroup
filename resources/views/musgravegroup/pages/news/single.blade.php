@php
    use Carbon\Carbon;
    $news->formatted_date = Carbon::parse($news->created_at)->format('jS F Y');
@endphp

@extends('musgravegroup.base')
@section('body-classes', 'post-template-default single single-post postid-2101 single-format-standard wp-custom-logo')
@section('title', $news->title)
@section('meta')
    <meta name="description" content="{{ Str::limit(strip_tags($news->small_description), 160) }}">
    <meta name="keywords" content="News, {{ $news->category }}">
    <meta property="og:title" content="{{ Str::limit($news->title, 70) }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($news->small_description), 160) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset($news->media->path) }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="{{ Str::limit($news->title, 70) }}">
    <meta property="twitter:description" content="{{ Str::limit(strip_tags($news->small_description), 160) }}">
    <meta property="twitter:image" content="{{ asset($news->media->path) }}">
@endsection
@section('style')
    <style>
        .sub-menu {
            display: none!important;
        }
    </style>
@endsection
@section('content')
    <article id="post-{{ $news->id }}"
             class="post-{{ $news->id }} post type-post status-publish format-standard hentry category-news">
        <div class="colour-block"></div>
        <header class="entry-header">
            <div class="container">
                <h1>{{ $news->title }}</h1>
            </div>
        </header>

        <div class="entry-content container aos-init aos-animate" data-aos="fade-up">
            <div class="blog-img aos-init aos-animate" data-aos="fade-in" data-aos-delay="350">
                <img width="300" height="209" src="{{ asset($news->media->path) }}" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" fetchpriority="high" sizes="(max-width: 300px) 100vw, 300px">
            </div>
            <div class="entry-meta aos-init aos-animate" data-aos="fade-in" data-aos-delay="350">
                <span class="posted-on">Posted on
                    <a href="" rel="bookmark">
                        <time class="entry-date published" datetime="{{ $news->created_at }}">{{ $news->formatted_date }}</time>
                        <time class="updated" datetime="{{ $news->created_at }}">{{ $news->formatted_date }}</time>
                    </a>
                </span>
            </div>
            <div data-aos="fade-in" data-aos-delay="350" class="aos-init aos-animate">
                {!! $news->content->content !!}
                @include('musgravegroup.components.share')
            </div>
        </div>
    </article>
    <x-slider/>
@endsection
