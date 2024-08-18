@extends('musgravegroup.base')
@section('body-classes', 'careers-template-default single single-careers postid-6867 wp-custom-logo')

@section('content')
    <main id="main" class="site-main">

        <section class="blog-hero lazyload" style="background-image:url('{{ asset('img/sectors/finance_v3.webp') }}')">
            <div class="text">
                <h1>Finance</h1>
            </div>
        </section>

        <article id="post-7224" class="post-7224 careers type-careers status-publish hentry">
            <div class="container">
                <div class="careers-text-block" data-aos="fade-up" data-aos-once="true">
                    <p><strong>With a Group turnover of over €3.9 billion and retail sales in excess of €5.2
                            billion, if you join any of our finance departments, you’ll be part of a
                            strategic function which influences decision making in Musgrave &#8211; from
                            acquisitions, to driving profitability for our partners, to sales analysis on
                            major accounts.</strong></p>
                    <p>We have finance teams working on every area of the business, from ways to achieve the
                        best possible profit margins on products, to over-seeing payment ledgers and
                        invoicing, to tax and treasury management. We have opportunities for different
                        levels of experience and we offer training and career progression within, and
                        across, finance teams.</p>
                </div>

                <div class="container">
                    <div class="slide-nav" data-aos="fade-in">
                        <div class="nav-item">
                            <div>
                                A role in finance
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
                                <h2>A role in finance</h2>
                                <p>Ann-Marie O&#8217;Brien is a credit control manager in our Northern
                                    Ireland division, based in Belfast. She joined Musgrave 10 years ago and
                                    with training and mentoring she has progressed to a management position.
                                    In this video she shares more information about her role and why she
                                    enjoys working for Musgrave.</p>
                                <p>
                                    <span
                                        class="wistia_embed wistia_async_1751yndo6k popover=true popoverAnimateThumbnail=true popoverContent=link" style="position: relative"><a class="button" href="#">
                                            Watch Video
                                        </a>
                                    </span>
                                </p>
                            </div>

                            <div class="image">
                                <img data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/07/Ann-Marie-O’Brien.png?lossy=0&strip=1&webp=1" alt="" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload"/>
                                <noscript>
                                    <img src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/07/Ann-Marie-O’Brien.png?lossy=0&amp;strip=1&amp;webp=1" alt=""/>
                                </noscript>
                            </div>
                        </div>

                        <div class="slide-box">
                            <div class="text">
                                <h2>Annual Statement</h2>
                                <p>Our annual statement 2019 shows a Group profit of €88 million, our fifth
                                    consecutive year of business growth and improved profits. We recorded
                                    combined retail sales of €5.4 million, owing to strong performance by
                                    all the brands, as well as growth of new brands like Donnybrook Fair.
                                </p>
{{--                                <a class="button" href="../../index3fe8.html?page_id=10180">READ--}}
{{--                                    STATEMENT</a>--}}
                            </div>
                            <div class="image">
                                <img data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/07/Musgrave-annual-statement-pdf.png?lossy=0&strip=1&webp=1" alt="" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload"/>
                                <noscript>
                                    <img src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/07/Musgrave-annual-statement-pdf.png?lossy=0&amp;strip=1&amp;webp=1" alt=""/>
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
