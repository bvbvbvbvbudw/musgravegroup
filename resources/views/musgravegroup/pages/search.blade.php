@extends('musgravegroup.base')
@section('title', 'Search result')
@section('body-classes', 'blog wp-custom-logo hfeed')
@section('style')
    <style>
        .blog-hero {
            margin: 0;
            text-align: center;
            position: relative;
            height: 400px;
            background-size: cover;
            background-position: center center;
            background: url('{{ asset('img/search.jpg') }}');
        }
        .blog-hero:before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0,0,0,.8)!important;
        }
    </style>
@endsection

@section('content')
    <section class="blog-hero">
        <div class="text">
            <h1 class="page-title">
                Search Results
            </h1>
            <div class="result">
                <span>We found {{ $results->count() }} results for </span>"{{ $word }}"
            </div>
            @include('musgravegroup.components.search-input')
        </div>
    </section>

    <div class="container">
        <div class="search-block Category: Retail partners">
            @foreach($results as $result)
                <div class="cat-block communities-color news-color partnerships-color supervalu-color" data-aos="fade-up">
                    <img width="300" height="182"
                         src="{{ asset($result?->media?->path ?? 'default.png') }}"
                         class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                         fetchpriority="high"
                         sizes="(max-width: 300px) 100vw, 300px">
                    <div class="colour-block" data-aos="fade-in"></div>
                    <div class="text" data-aos="fade-in">
                        <h3>
                            <a href="{{ $result->route }}">
                                {{ $result->title }}
                            </a>
                        </h3>
                        <p>{{ $result->small_description ?? '' }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
