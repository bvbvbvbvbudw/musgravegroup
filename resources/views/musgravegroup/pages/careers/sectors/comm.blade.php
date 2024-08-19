@extends('musgravegroup.base')

@section('body-classes', 'careers-template-default single single-careers postid-6867 wp-custom-logo')
@section('title', 'Commercial')
@section('content')
    <main id="main" class="site-main">

        <section class="blog-hero lazyload" style="background-image:url('{{ asset('img/sectors/commercial_v4.webp') }}')">
            <div class="text">
                <h1>Commercial</h1>
            </div>
        </section>


        <article id="post-7223" class="post-7223 careers type-careers status-publish hentry">
            <div class="container">
                <div class="careers-text-block" data-aos="fade-up" data-aos-once="true">
                    <div><strong>Retail is a fast-paced industry, no two days are the same, and so the
                            commercial roles available within our business offer an attractive mix of
                            excitement and challenges. We’re looking for people with the drive and passion
                            to take on these challenges and thrive within our fast-paced culture.</strong>
                    </div>
                    <div></div>
                    <div>Our trading teams work closely with suppliers &#8211; launching new products,
                        setting prices and ensuring profitability of ranges are daily tasks. Meanwhile in
                        marketing, our teams are innovating every day to entice shoppers to visit our
                        stores, and develop campaigns to educate and encourage consumers to eat healthily
                        and make better choices when they shop.
                    </div>
                    <div></div>
                </div>

                <div class="container">
                    <div class="slide-nav" data-aos="fade-in">
                        <div class="nav-item">
                            <div>
                                A role in trading
                            </div>
                        </div>
                        <div class="nav-item">
                            <div>
                                Latest news
                            </div>
                        </div>
                    </div>


                    <section class="slider-text-nav" data-aos="fade-up">

                        <div class="slide-box">
                            <div class="text">
                                <h2>A role in trading</h2>
                                <p>Paddy Curran is a trading manager within our retail division, based in
                                    Cork. He thrives on seeing a product go right from concept to the shop
                                    floor, from setting the price to seeing it fly off the shelves. In this
                                    video he gives an insight into the trading role and how our people in
                                    Musgrave work as a team.</p>
                                <p>
                                    <span class="wistia_embed wistia_async_so5vvo5v6q popover=true popoverAnimateThumbnail=true popoverContent=link"
                                        style="position: relative">
                                        <a class="button" href="#">
                                            Watch Video
                                        </a>
                                    </span>
                                </p>
                            </div>

                            <div class="image">
                                <img data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/07/Paddy-Curran.png?lossy=0&strip=1&webp=1" alt="" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload"/>
                                <noscript>
                                    <img src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/07/Paddy-Curran.png?lossy=0&amp;strip=1&amp;webp=1" alt=""/>
                                </noscript>

                            </div>
                        </div>


                        <div class="slide-box">
                            <div class="text">
                                <h2>SuperValu launches largest eco-friendly range</h2>
                                <p>We always want to be the first brand to implement new concepts, products
                                    and ranges into our stores. In line with our sustainability strategy, in
                                    August we launched into SuperValu the largest range of eco-products
                                    currently available in any supermarket in Ireland. The range of 65
                                    products offers customers a sustainable alternative to kitchen and
                                    household essentials and supports them in thinking green with their
                                    shopping choices.</p>

{{--                                <a class="button"--}}
{{--                                   href="../../supervalu-offering-customers-greener-choices-as-they-trial-irelands-largest-supermarket-eco-range/index.html">READ--}}
{{--                                    MORE--}}
{{--                                </a>--}}
                            </div>

                            <div class="image">

                                <img data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/07/supervalu-eco-range.jpg?lossy=0&strip=1&webp=1" alt="" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload"/>
                                <noscript>
                                    <img src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/07/supervalu-eco-range.jpg?lossy=0&amp;strip=1&amp;webp=1" alt=""/>
                                </noscript>
                            </div>
                        </div>
                    </section>
                </div>
                @include('musgravegroup.pages.careers.sectors.components.sectors')
            </div>
        </article>
        <x-news/>
@endsection
