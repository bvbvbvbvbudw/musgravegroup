@extends('musgravegroup.base')
@section('body-classes', 'archive post-type-archive post-type-archive-vacancies wp-custom-logo hfeed')
@section('content')
    <section class="blog-hero lazyload" style="background-image:url('{{asset('img/careers/4.webp')}}')">
        <div class="text">
            <h1>Current vacancies</h1>
        </div>
        <div class="vacancies-bar">
            <div class="vacancies-row">
                <div class="bar-column">
                    <p>Keyword</p>
                    <form role="search" action="{{ route('page.careers.current') }}" method="get" id="searchform">
                        <input type="text" name="search" placeholder="Search Vacancies" value="{{ request()->get('search') }}"/>
                        <input type="submit" alt="Search" value="Search"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <h1>We have {{ $vacancies->count() }} job vacancies</h1>
        @foreach($vacancies as $vac)
            <article id="post-23663" class="post-23663 vacancies type-vacancies status-publish hentry category-careers"
                     data-aos="fade-in" data-aos-once="true">
                <div class="colour-block"></div>

                <div class="entry-content ">
                    <h2><a class="job-title" href="{{ route('page.careers.vacancies.show', $vac->url) }}">{{ $vac->title }}</a></h2>
                    <h4>{{ $vac->location->location ?? '' }}<br></h4>
                    <br><br>
                    <h4> Date Posted: {{ $vac->formatted_date }} </h4> <br>
                    <a class="more-details" href="{{ route('page.careers.vacancies.show', $vac->url) }}">More details </a>
                </div>
            </article>
        @endforeach
    </div>
@endsection
