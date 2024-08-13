@extends('musgravegroup.base')
@section('body-classes', 'careers-template-default single single-careers postid-6867 wp-custom-logo')

@section('content')
    <main id="main" class="site-main">

        <section class="blog-hero lazyload" style="background-image:inherit"
                 data-bg-image="url(https_/b2833840.smushcdn.com/2833840/wp-content/uploads/2019/07/graduates_v20aa7.html?lossy=0&amp;strip=1&amp;webp=1)">
            <div class="text">
                <h1>Graduates</h1>
            </div>
        </section>


        <article id="post-7225" class="post-7225 careers type-careers status-publish hentry">
            <div class="container">
                <div class="careers-text-block" data-aos="fade-up" data-aos-once="true">
                    <p><strong>Musgrave is the launchpad for all sorts of exciting careers. If you have a
                            love for good food, a passion for business or a desire to help us build
                            sustainable communities, you’ll fit right in.</strong></p>
                    <p>As a graduate you’ll get to work straight away on a huge number of challenges and
                        opportunities. You’ll be both stretched and challenged, but you’re backed up the
                        whole way by a dedicated team responsible for your development. And given only a
                        select group join us every year, you won’t be just another face in the crowd. What
                        are you waiting for? Find out how to apply for the Musgrave Graduate Programme
                        today.</p>
                    <a class="button" href="https://www.musgravegraduates.com/">Visit Graduate website</a>
                </div>
                @include('musgravegroup.pages.careers.sectors.components.sectors')
            </div><!-- container -->
        </article><!-- #post-7225 -->
        <x-news/>
@endsection
