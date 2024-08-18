@extends('musgravegroup.base')
@section('body-classes', 'page-template page-template-page-templates page-template-page-sustainability-page-22 page-template-page-templatespage-sustainability-page-22-php page page-id-14965 page-child parent-pageid-14935 wp-custom-logo')
@section('content')
    <section class="blog-hero lazyload" style="background-image:url('{{asset('img/sus/carring.webp')}}')">
        <div class="text">
            <h1>Caring for the planet</h1>
        </div>
    </section>

    <article id="post-14965" class="post-14965 page type-page status-publish hentry">
        <div class="container">
            <div class="sustainability-text-block" data-aos="fade-up">
                <h2>Caring for the planet</h2>
                <p>At Musgrave we are committed to becoming net zero carbon in our own operations and with our retailers
                    by 2040, and in our full value chain by 2050. These targets give us a long-term focus on systematic
                    and consistent improvements across our business and brands to reduce emissions.</p>
                <p>We will decarbonise our own business in line with our ambition supported by a number of targets that
                    align with climate science and to a 1.5 °C degree warming scenario. We have committed to the <a
                        href="https://sciencebasedtargets.org/">Science Based Targets initiative (SBTi)</a> and have
                    developed targets in line with the SBTi Net Zero standard. In committing to the SBTi we have also
                    joined the <a href="https://sciencebasedtargets.org/business-ambition-for-1-5c">Business Ambition
                        for 1.5°C Campaign</a>, the world’s largest and fastest growing group of companies that are
                    aligning with a 1.5 °C by helping to halve global emissions by 2030.</p>
                <p>SuperValu and Centra retailers have achieved a 9% carbon reduction, a year on from the launch of the
                    €25m Musgrave Sustainability Fund. SuperValu and Centra set out to achieve a 12% carbon reduction by
                    end of 2023.  The funding can be used by retailers to help fund initiatives such as solar panels,
                    energy efficient refrigeration, LED lighting and more. In addition to reducing emissions, this area
                    of our strategy focuses on reducing packaging, eradicating food waste and improving
                    biodiversity.</p>
            </div>
        </div>
    </article>

    <div class="container">
        <div class="slide-nav" data-aos="fade-in">
            <div class="nav-item">
                <div>
                    Creating vibrant communities
                </div>
            </div>
            <div class="nav-item">
                <div>
                    Sourcing for good
                </div>
            </div>
        </div>


        @include('musgravegroup.pages.sustainability.components.slider')
    </div>
    <x-latest-news-sustainability/>
@endsection
