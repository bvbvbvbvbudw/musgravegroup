@php
    use Carbon\Carbon;
    $news->formatted_date = Carbon::parse($news->created_at)->format('jS F Y');
@endphp

@extends('musgravegroup.base')
@section('body-classes', 'post-template-default single single-post postid-2101 single-format-standard wp-custom-logo')
@section('title', $news->title)
@section('meta')
    <meta name="description" content="{{ $news->small_description }}">
    <meta name="keywords" content="News, {{ $news->category }}">
    <meta property="og:title" content="{{ $news->title }}">
    <meta property="og:description" content="{{ $news->small_description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset($news->media->path) }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="{{ $news->title }}">
    <meta property="twitter:description" content="{{ $news->small_description }}">
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

        <div class="entry-content container" data-aos="fade-up">
            <div class="blog-img" data-aos="fade-in" data-aos-delay="350">
                <img src="{{ asset($news->media->path) }}" alt="{{ $news->title }}" class="img-fluid">
            </div>
            <div class="entry-meta" data-aos="fade-in" data-aos-delay="350">
                <span class="posted-on">Posted on <a href="#" rel="bookmark"><time
                            class="entry-date published updated"
                            datetime="{{ $news->created_at }}">{{ $news->formatted_date }}</time></a></span>
                <span class="byline"> by <span class="author vcard"><a
                            class="url fn n"
                            href="#">Musgrave</a></span></span>
            </div>
            <div data-aos="fade-in" data-aos-delay="350">
                {!! $news->content->content !!}
                <div class="ssba-classic-2 ssba ssbp-wrap aligncenter ssbp--theme-1">
                    <div style="text-align:N"><span class="ssba-share-text">Share this...</span><br/>
                        <a data-site="facebook" class="ssba_facebook_share ssba_share_link"
                           href="https://www.facebook.com/sharer.php?u={{ urlencode(url()->current()) }}&title={{ urlencode($news->title) }}"
                           style="color:; background-color: ; height: 48px; width: 48px;">
                            <img
                                data-src="https://b2833840.smushcdn.com/2833840/wp-content/plugins/simple-share-buttons-adder/buttons/somacro/facebook.png?lossy=0&strip=1&webp=1"
                                style="width: 35px;" title="facebook" class="ssba ssba-img lazyload"
                                alt="Share on facebook"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/>
                            <noscript><img
                                    src="https://b2833840.smushcdn.com/2833840/wp-content/plugins/simple-share-buttons-adder/buttons/somacro/facebook.png?lossy=0&amp;strip=1&amp;webp=1"
                                    style="width: 35px;" title="facebook" class="ssba ssba-img"
                                    alt="Share on facebook"/></noscript>
                            <div title="Facebook" class="ssbp-text">Facebook</div>
                        </a>
                        <a data-site="pinterest" class="ssba_pinterest_share ssba_share_link"
                           href="https://pinterest.com/pin/create/button/?url={{ urlencode(url()->current()) }}&description={{ urlencode($news->title) }}"
                           style="color:; background-color: ; height: 48px; width: 48px;">
                            <img
                                data-src="https://b2833840.smushcdn.com/2833840/wp-content/plugins/simple-share-buttons-adder/buttons/somacro/pinterest.png?lossy=0&strip=1&webp=1"
                                style="width: 35px;" title="pinterest" class="ssba ssba-img lazyload"
                                alt="Share on pinterest"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/>
                            <noscript><img
                                    src="https://b2833840.smushcdn.com/2833840/wp-content/plugins/simple-share-buttons-adder/buttons/somacro/pinterest.png?lossy=0&amp;strip=1&amp;webp=1"
                                    style="width: 35px;" title="pinterest" class="ssba ssba-img"
                                    alt="Share on pinterest"/></noscript>
                            <div title="Pinterest" class="ssbp-text">Pinterest</div>
                        </a>
                        <a data-site="twitter" class="ssba_twitter_share ssba_share_link"
                           href="https://twitter.com/intent/tweet?text={{ urlencode($news->title) }}&url={{ urlencode(url()->current()) }}"
                           style="color:; background-color: ; height: 48px; width: 48px;">
                            <img
                                data-src="https://b2833840.smushcdn.com/2833840/wp-content/plugins/simple-share-buttons-adder/buttons/somacro/twitter.png?lossy=0&strip=1&webp=1"
                                style="width: 35px;" title="twitter" class="ssba ssba-img lazyload"
                                alt="Share on twitter"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/>
                            <noscript><img
                                    src="https://b2833840.smushcdn.com/2833840/wp-content/plugins/simple-share-buttons-adder/buttons/somacro/twitter.png?lossy=0&amp;strip=1&amp;webp=1"
                                    style="width: 35px;" title="twitter" class="ssba ssba-img"
                                    alt="Share on twitter"/></noscript>
                            <div title="Twitter" class="ssbp-text">Twitter</div>
                        </a>
                        <a data-site="linkedin" class="ssba_linkedin_share ssba_share_link"
                           href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($news->title) }}&summary={{ urlencode($news->small_description) }}"
                           style="color:; background-color: ; height: 48px; width: 48px;">
                            <img
                                data-src="https://b2833840.smushcdn.com/2833840/wp-content/plugins/simple-share-buttons-adder/buttons/somacro/linkedin.png?lossy=0&strip=1&webp=1"
                                style="width: 35px;" title="linkedin" class="ssba ssba-img lazyload"
                                alt="Share on linkedin"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/>
                            <noscript><img
                                    src="https://b2833840.smushcdn.com/2833840/wp-content/plugins/simple-share-buttons-adder/buttons/somacro/linkedin.png?lossy=0&amp;strip=1&amp;webp=1"
                                    style="width: 35px;" title="linkedin" class="ssba ssba-img"
                                    alt="Share on linkedin"/></noscript>
                            <div title="Linkedin" class="ssbp-text">Linkedin</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <x-slider/>
@endsection
