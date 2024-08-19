@extends('musgravegroup.base')
@section('title', 'Creating vibrant communities')
@section('body-classes', 'page-template page-template-page-templates page-template-page-sustainability-page-22 page-template-page-templatespage-sustainability-page-22-php page page-id-14969 page-child parent-pageid-14935 wp-custom-logo')
@section('content')
    <section class="blog-hero lazyload" style="background-image:urL('{{asset('img/sus/vibrant.webp')}}')">
        <div class="text">
            <h1>Creating vibrant communities</h1>
        </div>
    </section>
    <article id="post-14969" class="post-14969 page type-page status-publish hentry">
        <div class="container">
            <div class="sustainability-text-block" data-aos="fade-up">
                <h2>Creating vibrant communities</h2>
                <p>Our retail partners are at the heart of communities across the island of Ireland. As a business we
                    apply scale, innovation, and investment locally to inspire communities to respond to the climate
                    crisis and amplify the positive impact of social, economic and environmental initiatives.</p>
                <p>SuperValu TidyTowns, which we have sponsored for three decades, is a good example of this. It has
                    evolved from a competition about local area appearance to a national sustainability initiative,
                    delivering environmental and societal changes across towns and villages in Ireland. We are committed
                    to evolving TidyTowns to help impact the things that really matter to people today including,
                    emissions, biodiversity and waste, in partnership with the Department of Community and Rural
                    Development (DECRD).</p>
                <p>We are also committed to sourcing locally and supporting small producers who contribute to our
                    vibrant food economy, without increasing food miles. Through initiatives like Food Academy in
                    SuperValu and the GreenShoots programme in Musgrave Marketplace we are helping small businesses
                    through the journey from start-up to getting products on our shelves.</p>
            </div>
        </div>
    </article>
    <div class="container">
        <div class="slide-nav" data-aos="fade-in">
            <div class="nav-item">
                <div>
                    Caring for the planet
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
