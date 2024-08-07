@extends('musgravegroup.base')
@section('title', $vacancy->title)
@section('meta')

@endsection

@section('body-classes', 'vacancies-template-default single single-vacancies postid-23742 wp-custom-logo')

@section('content')
        <article id="post-23742" class="post-23742 vacancies type-vacancies status-publish hentry category-careers">
            <div class="colour-block"></div>
            <header class="entry-header">
                <div class="container">
                    <h1>{{ $vacancy->title }}</h1>
                </div>
            </header><!-- .entry-header -->

            <div class="entry-content container aos-init aos-animate" data-aos="fade-up" data-aos-once="true">
                <h2>Summary</h2>
                <h4>Job ref: <span>{{ $vacancy->id }}</span></h4>
                <h4>Job Type: <span>{{ $vacancy->type }}</span></h4>
                <h4>Location: <span>{{ $vacancy -> location }}</span></h4>
                <h4>Contract type: <span>{{ $vacancy->contract_type }}</span></h4>
                <h4> Closing Date: <span>{{ $vacancy->end_date }}</span></h4>
                <br>
                <hr>

                <h2>{{ $vacancy->title }}</h2>

                {!! $vacancy->content->content !!}

                <br><br>

                <a class="button" target="_blank" href="https://www.musgravecareers.com/amr/applyForm.php?requirementId=15539">Apply Now</a>


                <div class="related-content"><div class="related-column aos-init" data-aos="fade-up" data-aos-once="true"><div class="background-zoom lazyload" style="background-image:inherit;" data-bg-image="url(https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/the-green-kitchen.jpg?lossy=0&amp;strip=1&amp;webp=1)"></div><a href="https://www.musgravegroup.com/careers/current-vacancies/"></a><h2><a href="https://www.musgravegroup.com/careers/current-vacancies/">All Jobs</a></h2></div><div class="related-column aos-init" data-aos="fade-up" data-aos-once="true"><div class="background-zoom lazyload" style="background-image:inherit;" data-bg-image="url(https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/our-brands-1.jpg?lossy=0&amp;strip=1&amp;webp=1)"></div><a href="https://www.musgravegroup.com/brands/"></a><h2><a href="https://www.musgravegroup.com/brands/">Our brands</a></h2></div><div class="related-column aos-init" data-aos="fade-up" data-aos-once="true"><div class="background-zoom lazyload" style="background-image:inherit;" data-bg-image="url(https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/food-innovation.jpg?lossy=0&amp;strip=1&amp;webp=1)"></div><a href="https://www.musgravegroup.com/news-blogs/"></a><h2><a href="https://www.musgravegroup.com/news-blogs/">Latest news</a></h2></div></div>

            </div><!-- .entry-content -->
        </article><!-- #post-23742 -->
@endsection
