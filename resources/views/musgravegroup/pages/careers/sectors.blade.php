@extends('musgravegroup.base')
@section('title', 'Career sectors')
@section('body-classes', 'archive post-type-archive post-type-archive-careers wp-custom-logo hfeed')
@section('content')
    <section class="blog-hero lazyload" style="background-image:url('{{asset('img/careers/3.webp')}}')" data-aos="fade-in" data-aos-once="true">
        <div class="text">
            <h1>Career sectors</h1>
        </div>
    </section>
    <div class="container">
        <div class="careers-text-block" data-aos="fade-up" data-aos-once="true">
            <h3>Find <em>your</em> next career</h3>
            <p><strong>Every role at Musgrave challenges and inspires you to be the best you can be. Whether you want to
                    drive digital innovation, influence our product ranges, or share your passion for customer service,
                    you can make a difference with us.</strong></p>
            <p>As Ireland’s largest private sector employer, with over 40,000 employees across our business and brands,
                we have a huge variety of roles and plenty of opportunity to progress. Select a sector area below to
                find out more about our business and the type of roles available or search for current vacancies.</p>
        </div>
        @include('musgravegroup.pages.careers.sectors.components.sectors')
    </div>
    <x-news/>
@endsection
