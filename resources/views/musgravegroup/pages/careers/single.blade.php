@extends('musgravegroup.base')
@section('title', $vacancy->title)
@section('meta')
    @php
        $metaDescription = Str::limit(strip_tags($vacancy->content->content), 150, '...');
    @endphp

    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords" content="{{ $vacancy->keywords ?? 'job, vacancy, careers' }}">
    <meta name="author" content="Musgrave Group">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $vacancy->title }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:image" content="{{ asset($vacancy->image ?? 'default-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Musgrave Group">
    <meta property="article:published_time" content="{{ $vacancy->created_at }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $vacancy->title }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ asset($vacancy->image ?? 'default-image.jpg') }}">
    <meta name="twitter:site" content="@MusgraveGroup">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
@endsection


@section('body-classes', 'vacancies-template-default single single-vacancies postid-23742 wp-custom-logo')

@section('content')
    <article id="post-23742" class="post-23742 vacancies type-vacancies status-publish hentry category-careers">
        <div class="colour-block"></div>
        <header class="entry-header">
            <div class="container">
                <h1>{{ $vacancy->title }}</h1>
            </div>
        </header>

        <div class="entry-content container aos-init aos-animate" data-aos="fade-up" data-aos-once="true">
            <h2>Summary</h2>
            <h4>Job ref: <span>{{ $vacancy->id }}</span></h4>
            <h4>Job Type: <span>{{ $vacancy->type }}</span></h4>
            <h4>Location: <span>{{ $vacancy -> location -> location }}</span></h4>
            <h4>Contract type: <span>{{ $vacancy->contract_type }}</span></h4>
            <h4> Closing Date: <span>{{ $vacancy->end_date }}</span></h4>
            <br>
            <hr>
            <h2>{{ $vacancy->title }}</h2>
            {!! $vacancy->content->content !!}
            <br><br>
            <a class="button" target="_blank" href="{{ route('page.careers.vacancies.apply', $vacancy->id) }}">Apply
                Now</a>
            <div class="related-content">
                <div class="related-column aos-init" data-aos="fade-up" data-aos-once="true">
                    <div class="background-zoom lazyload" style="background-image:inherit;"
                         data-bg-image="url(https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/the-green-kitchen.jpg?lossy=0&amp;strip=1&amp;webp=1)"></div>
                    <a href="{{ route('page.careers.current') }}"></a>
                    <h2><a href="{{ route('page.careers.current') }}">All Jobs</a></h2></div>
                <div class="related-column aos-init" data-aos="fade-up" data-aos-once="true">
                    <div class="background-zoom lazyload" style="background-image:inherit;"
                         data-bg-image="url(https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/our-brands-1.jpg?lossy=0&amp;strip=1&amp;webp=1)"></div>
                    <a href="{{ route('page.brand') }}"></a>
                    <h2><a href="{{ route('page.brand') }}">Our brands</a></h2></div>
                <div class="related-column aos-init" data-aos="fade-up" data-aos-once="true">
                    <div class="background-zoom lazyload" style="background-image:inherit;"
                         data-bg-image="url(https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/food-innovation.jpg?lossy=0&amp;strip=1&amp;webp=1)"></div>
                    <a href="{{ route('page.news') }}"></a>
                    <h2><a href="{{ route('page.news') }}">Latest news</a></h2></div>
            </div>
        </div>
    </article>
@endsection
