@php
    use Carbon\Carbon;
    $podcast->formatted_date = Carbon::parse($podcast->created_at)->format('jS F Y');
@endphp

@extends('musgravegroup.base')
@section('title', $podcast->title)
@section('body-classes', 'post-template-default single single-post postid-22166 single-format-standard wp-custom-logo')
@section('meta')
@endsection

@section('content')
    <article id="post-22166"
             class="post-22166 post type-post status-publish format-standard has-post-thumbnail hentry category-podcasts">
        <div class="colour-block"></div>
        <header class="entry-header">
            <div class="container">
                <h1>{{ $podcast -> title }}</h1>
            </div>
        </header><!-- .entry-header -->

        <div class="entry-content container" data-aos="fade-up" style="display: flex; flex-wrap: wrap">
            <div style="width: 35%; float:none" class="podcast-image blog-img" data-aos="fade-in"
                 data-aos-delay="350">
                <img width="300" height="300"
                     src="{{ asset($podcast->media->path) }}"
                     class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                     fetchpriority="high"
                     sizes="(max-width: 300px) 100vw, 300px"/>
            </div>
            <div class="podcast-content" style="width:65%">
                <div class="entry-meta" data-aos="fade-in" data-aos-delay="350">
									<span class="posted-on">Posted on <a href="{{ route('page.index') }}" rel="bookmark"><time
                                                class="entry-date published updated"
                                                datetime="2024-03-07T14:00:17+00:00">{{ $podcast->formatted_date }}</time></a></span><span
                        class="byline"> by <span
                            class="author vcard"><a class="url fn n"
                                                    href="../author/claire/index.html">Claire Marshall</a></span></span>
                </div><!-- .entry-meta -->

                <div data-aos="fade-in" data-aos-delay="350">
                    {!! $podcast->content !!}
                </div>

                <div class="podcast-links">

                    @if($podcast->spotify)
                        <a target="_blank"
                           href="{{ $podcast->spotify }}"
                           style="display: inline-block; background-color: #000000; background-image:inherit; background-repeat: no-repeat; border: 1px solid #000000; margin: 0 5px 5px 0; text-indent: -9000px; background-position: 10px -53px; height: 40px; width: 165px;"
                           data-bg-image="url(https://www.buzzsprout.com/images/badges/listen-on-embed.svg)"
                           class="lazyload">Listen on Spotify</a>
                    @endif

                    @if($podcast->apple)
                        <a target="_blank"
                           href="{{ $podcast->apple }}"
                           style="display: inline-block; background-color: #000000; background-image:inherit; background-repeat: no-repeat; border: 1px solid #000000; margin: 0 5px 5px 0; text-indent: -9000px; background-position: 10px 7px; height: 40px; width: 165px;"
                           data-bg-image="url(https://www.buzzsprout.com/images/badges/listen-on-embed.svg)"
                           class="lazyload">Listen on Apple Podcasts</a>
                    @endif

                    @if($podcast->buzz)
                        <a target="_blank"
                           href="{{ $podcast->buzz }}"
                           style="display: inline-block; background-image:inherit; background-repeat: no-repeat;  text-indent: -9000px; height: 40px; width: 165px;"
                           data-bg-image="url(https://www.musgravegroup.com/wp-content/themes/musgrave/img/buzzsprout.svg)"
                           class="lazyload">Listen on Buzzsprout</a>
                    @endif


                </div>

                <a style="margin: 1rem 0" href="{{ route('page.about.podcasts') }}" class="button">
                    View all podcasts
                </a>
            </div>
        </div>
    </article><!-- #post-22166 -->

    <style>
        .podcast-content ul {
            margin-left: 0;
            padding-left: 1rem;
        }

        .podcast-content span.posted-on,
        .podcast-content span.posted-on a {
            color: #A9C241;
        }

        .single article .colour-block {
            background: #A9C241;
        }

        .podcast-links {
            display: flex;
            flex-wrap: wrap;
        }

        @media only screen and (max-width: 600px) {
            .podcast-image {
                width: 100% !important;
                padding: 0;
            }

            .podcast-content {
                width: 100% !important;
            }
        }
    </style>
@endsection
