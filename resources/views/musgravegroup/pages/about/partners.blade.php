@extends('musgravegroup.base')
@section('body-classes', 'page-template page-template-page-templates page-template-page-content page-template-page-templatespage-content-php page page-id-8815 page-child parent-pageid-19 wp-custom-logo')
@section('content')
    <article id="post-8815" class="post-8815 page type-page status-publish hentry">
        <div class="colour-block orange"></div>
        <header class="entry-header">
            <div class="container">
                <h1>Our retail partners</h1>
                <h3></h3>
            </div>
        </header>

        <div class="entry-content container content-block" data-aos="fade-up">
            <script src="https://fast.wistia.com/embed/medias/4f8qvqcvm1.jsonp" async></script>
            <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

            <div class="generic-padding" data-aos="fade-in" data-aos-delay="350">
                <p>We have a 147-year heritage in food and brand innovation. What sets us apart from our competitors is
                    our unique network of independent retail partners in Ireland, Northern Ireland and Spain – thousands
                    of individual entrepreneurs with a deep understanding of the needs of their local communities.</p>
                <p>We are very proud of our relationships with our retailers, some of which go back many decades. Like
                    Musgrave, these are family business leaders who have invested heavily to ensure their enterprises
                    remain the thriving hub of the town or city they serve.</p>
                <p>The future of our business is about working with our retail partners to create world-class outlets,
                    offering outstanding customer focused food and drink experiences. This is a vision that requires the
                    frontline expertise and local knowledge that can only be provided by outstanding partners who
                    operate in the communities in which they live.</p>


                <div class="generic-padding" data-aos="fade-in" data-aos-delay="350">
                    <div class="related-content">
                        <div class="related-column" data-aos="fade-up">
                            <div class="background-zoom lazyload" style="background-image: url('{{ asset('img/about/food.webp') }}')"></div>
                            <a href="{{ route('page.about.food') }}"><h2>Food leadership</h2></a>
                        </div>
                        <div class="related-column" data-aos="fade-up">
                            <div class="background-zoom lazyload" style="background-image: url('{{ asset('img/about/news.webp') }}');"></div>
                            <a href="{{ route('page.news') }}"><h2>News</h2></a>
                        </div>
                        <div class="related-column" data-aos="fade-up">
                            <div class="background-zoom lazyload" style="background-image: url('{{ asset('img/about/brands.webp') }}')"></div>
                            <a href="{{ route('page.brand') }}"><h2>Our brands</h2></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <x-news/>
@endsection
