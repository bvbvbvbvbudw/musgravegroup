@extends('musgravegroup.base')
@section('title', $news->title)
@section('meta')
@endsection
@section('body-classes', 'post-template-default single single-post postid-20035 single-format-standard wp-custom-logo')
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
                     src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2023/09/SuperValu-and-Centra-champion-environmental-change-300x209.jpg?lossy=0&amp;strip=1&amp;webp=1"
                     class="attachment-medium size-medium wp-post-image" alt="" decoding="async" fetchpriority="high"
                     srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2023/09/SuperValu-and-Centra-champion-environmental-change-300x209.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2023/09/SuperValu-and-Centra-champion-environmental-change-768x536.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2023/09/SuperValu-and-Centra-champion-environmental-change.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                     sizes="(max-width: 300px) 100vw, 300px"></div>
            <div class="entry-meta aos-init aos-animate" data-aos="fade-in" data-aos-delay="350">
                <span class="posted-on">Posted on <a
                        href="https://www.musgravegroup.com/supervalu-and-centra-champion-environmental-change-in-stores-and-communities-as-sustainability-upgrades-lead-to-significant-energy-savings/"
                        rel="bookmark">
                        <time class="entry-date published" datetime="2023-09-05T16:06:23+01:00">{{ $news->formatted_date }}</time>
                        <time class="updated" datetime="2023-09-05T16:15:42+01:00">5th September 2023</time>
                    </a>
                </span>
                <span class="byline"> by
                    <span class="author vcard">
                        <a class="url fn n"
                           href="https://www.musgravegroup.com/author/claire/">Claire Marshall</a>
                    </span>
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
