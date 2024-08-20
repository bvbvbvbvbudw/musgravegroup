@extends('musgravegroup.base')
@section('head')
    <link rel='stylesheet'
          href='{{ asset('css/podcasts.css') }}' type='text/css'
          media='all'/>
@endsection
@section('title', 'Podcasts')
@section('body-classes', 'page-template page-template-page-templates page-template-page-podcasts page-template-page-templatespage-podcasts-php page page-id-21630 wp-custom-logo')
@section('content')

    <section class="blog-hero" style="background-color: #a9c23f; background-image:url()">
        <div class="text">
            <h1>Podcasts</h1>
        </div>
    </section>

    <article id="post-21630" class="post-21630 page type-page status-publish hentry">
        <div class="container">
            <div class="about-text-block" data-aos="fade-up">
                <p>Meet the people behind Musgrave, in our podcast series Growing Good Business. This series goes behind
                    the scenes to discover more about Musgrave and the people who work here, talking about topics
                    including entrepreneurship, sustainability, food security and more. Listen and follow this series
                    wherever you access your podcasts. </p>
                @foreach($podcasts as $podcast)
                    <div class="podcast-block">
                        <div class="img">
                            <a href="{{ route('page.about.podcasts.show', $podcast->url) }}">
                                <img alt="title" src="{{ asset($podcast?->media?->path) }}" class="lazyload"/>
                                <noscript><img src="{{ asset($podcast?->media?->path) }}" alt="title"/></noscript>
                            </a>
                        </div>
                        <div class="content">
                            <h4>
                                <a href="{{ route('page.about.podcasts.show', $podcast->url) }}">{{ $podcast -> title }}</a>
                            </h4>
                            <p>{!! $podcast -> small_description  !!}</p>
                            <a href="{{ route('page.about.podcasts.show', $podcast -> url) }}" class="button">Listen now</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </article>
    {{ $podcasts->links('musgravegroup.pagination') }}
@endsection
