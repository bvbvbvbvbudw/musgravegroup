@extends('musgravegroup.base')
@section('body-classes', 'page-template page-template-page-templates page-template-page-sustainability-page-22 page-template-page-templatespage-sustainability-page-22-php page page-id-14935 page-parent wp-custom-logo')
@section('content')
    <section class="blog-hero lazyload" style="background-image:url('{{asset('img/bg-sus.webp')}}')">
        <div class="text">
            <h1>Sustainability</h1>
        </div>
    </section>

    <article id="post-14935" class="post-14935 page type-page status-publish hentry">
        <div class="container">
            <div class="sustainability-text-block" data-aos="fade-up">
                <h2><em>Growing sustainably every day</em></h2>
                <p>Musgrave is a sixth-generation family business, and we believe it is our responsibility to leave a
                    positive legacy for future generations. Climate change poses an urgent threat not only to the
                    environment but to our very existence. Addressing this challenge is complex and challenging. We
                    believe the power to overcome this lies in recognising sustainability as a collective
                    responsibility—a duty that demands unified efforts.</p>
                <p>We’ve called our sustainability strategy <em>Growing Sustainably Every Day</em>. It comprises three
                    pillars – Caring for the planet, Creating vibrant communities and Sourcing for good – in recognition
                    of the fact that, to make a tangible difference we need to think and work holistically – promoting
                    and delivering sustainability from field to fork.</p>
                <p>This collaborative approach to tackling sustainability aims to unite producers, shoppers, and local
                    communities, fostering a collective commitment to sustainability. We believe that together, we can
                    drive positive change by embracing renewable energy, responsible consumption and production, and a
                    greener future—for ourselves, our communities, and the planet.</p>
            </div>
        </div>
    </article>

    @include('musgravegroup.components.reports', $reports)

    <script>
        $(document).ready(function () {
            size_li = $(".number-block").size();
            x = 8;
            $('.number-block:lt(' + x + ')').show();
            $('#loadMore').click(function () {
                x = (x + 4 <= size_li) ? x + 4 : size_li;
                $('.number-block:lt(' + x + ')').show();
                if (x == size_li) {
                    $('#loadMore').hide();
                }
            });

        });
    </script>


    <div class="container">
        <div class="slide-nav" data-aos="fade-in">
            <div class="nav-item">
                <div>
                    Caring for the planet
                </div>
            </div>
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
