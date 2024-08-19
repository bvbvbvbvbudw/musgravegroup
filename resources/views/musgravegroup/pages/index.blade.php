@extends('musgravegroup.base')
@section('title', 'Home')
@section('body-classes', 'home page-template page-template-page-templates page-template-page-homepage-c19 page-template-page-templatespage-homepage-c19-php page page-id-9904 wp-custom-logo')
@section("content")
        <section class="home-hero slick-slider">
            <div>
                <div class="image lazyload" style="background-image:inherit;"
                     data-bg-image="url(&#039;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/01/4335-Musgrave-podcast-homepage-banner_episode-1.jpg?lossy=0&amp;strip=1&amp;webp=1&#039;)">
                    <div class="text sustainability">
                        <h1>Growing good business - a podcast series by Musgrave</h1>
                        <p></p>
                        <a href="{{ route('page.about.podcasts') }}">Listen now</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="image lazyload" style="background-image:inherit;"
                     data-bg-image="url(&#039;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/06/musgrave-group-net-zero-by-2040.jpeg?lossy=0&amp;strip=1&amp;webp=1&#039;)">
                    <div class="text sustainability">
                        <h1>We are committed to being Net Zero carbon by 2040</h1>
                        <p></p>
                        <a href="{{ route('page.sustainability') }}">Find out more</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="image lazyload" style="background-image:inherit;"
                     data-bg-image="url(&#039;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2023/01/we-support-thousands-of-local-suppliers-e1673367750125.jpg?lossy=0&amp;strip=1&amp;webp=1&#039;)">
                    <div class="text ">
                        <h1>We support thousands of local suppliers</h1>
                        <p></p>
                        <a href="{{ route('page.local') }}">Find out more</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="image lazyload" style="background-image:inherit;"
                     data-bg-image="url(&#039;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2021/10/food-academy-hero_a-bit-on-the-side.jpg?lossy=0&amp;strip=1&amp;webp=1&#039;)">
                    <div class="text ">
                        <h1>Giving small producers a big chance</h1>
                        <p></p>
                        <a href="{{ route('page.food') }}">Find out more</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="image lazyload" style="background-image:inherit;"
                     data-bg-image="url(&#039;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2023/11/15-leading-brands-hero-6.jpg?lossy=0&amp;strip=1&amp;webp=1&#039;)">
                    <div class="text food-leadership">
                        <h1>We own 15 leading food retail and wholesale brands</h1>
                        <p></p>
                        <a href="{{ route('page.brand') }}">Read more</a>
                    </div>
                </div>
            </div>
{{--            <div>--}}
{{--                <div class="image lazyload" style="background-image:inherit;"--}}
{{--                     data-bg-image="url(&#039;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2020/07/Header_sustainability_1.png?lossy=0&amp;strip=1&amp;webp=1&#039;)">--}}
{{--                    <div class="text sustainability">--}}
{{--                        <h1>We are helping to build sustainable communities</h1>--}}
{{--                        <p></p>--}}
{{--                        <a--}}
{{--                            href="supervalu-partners-with-the-all-ireland-pollinator-plan-to-bring-save-the-bees-campaign-to-schools-around-ireland/index.html">Save--}}
{{--                            the bees</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </section>
        <div class="values-container">
            <div class="container">
                <div class="values">
                    <div class="values-col">
                        <div class="col-1-3">
                            <p>We are proud to be one of Europe’s leading family-owned businesses with a
                                147-year heritage supporting communities across the island of Ireland and
                                Spain.</p>
                            <p>With our retail partners we support more than 41,000 jobs, in more than 1000
                                stores, warehouses and offices, bringing trusted food and beverage brands to
                                towns and cities in every part of the country.</p>
                            <p>With a presence in communities around the country, Musgrave is committed to
                                working with retail partners, suppliers and customers to make every
                                community a sustainable community.</p>
                            <a href="{{ route('page.about') }}" class="button">Find out more</a>
                        </div>
                        <div class="col-2-3 lazyload" style="background-image:url('{{asset('img/Homepage-image.webp')}}')">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container -->
        <section class="videos">
            <div class="container">
                <h3>Videos from around the business</h3>

                <div class="video-gallery">
                    <div class="videos-block">

                        <div class="video" data-aos="fade-in" data-aos-delay="150">
                            <div class="text lazyload" style="background-image:inherit;"
                                 data-bg-image="url(&#039;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/07/Our-sustainability-strategy-launch-at-SuperValu-Knocklyon-e1657787218659.png?lossy=0&amp;strip=1&amp;webp=1&#039;)">
                                <h3>Our sustainability strategy launch at SuperValu Knocklyon</h3>
                                <button class="load-video-button"
                                        data-video-embed="&lt;iframe class=&quot;wp-embedded-content&quot; sandbox=&quot;allow-scripts&quot; security=&quot;restricted&quot; title=&quot;2022 Musgrave sustainability strategy launch Video&quot; src=_https_/fast.wistia.net/embed/iframe/4v1tic0pnv89c5.html?dnt=1&amp;controls=1&amp;hd=1&amp;autohide=1&amp;autoplay=1#?secret=laK0U7oduS&quot; data-secret=&quot;laK0U7oduS&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; width=&quot;640&quot; height=&quot;360&quot; frameborder=&quot;0&quot;&gt;&lt;/iframe&gt;"><img
                                        data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        class="lazyload" /><noscript><img
                                            data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            class="lazyload" /><noscript><img
                                                data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                class="lazyload" /><noscript><img
                                                    data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    class="lazyload" /><noscript><img
                                                        data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        class="lazyload" /><noscript><img
                                                            src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&amp;strip=1&amp;webp=1" /></noscript></noscript></noscript></noscript></noscript></button>
                            </div>
                            <div class="video-container"></div>
                        </div>

                        <div class="video" data-aos="fade-in" data-aos-delay="150">
                            <div class="text lazyload" style="background-image:inherit;"
                                 data-bg-image="url(&#039;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/07/musgrave-who-we-are-e1656668458271.png?lossy=0&amp;strip=1&amp;webp=1&#039;)">
                                <h3>Who we are</h3>
                                <button class="load-video-button"
                                        data-video-embed="&lt;iframe class=&quot;wp-embedded-content&quot; sandbox=&quot;allow-scripts&quot; security=&quot;restricted&quot; title=&quot;Who We Are 2023 (Original) Video&quot; src=_https_/fast.wistia.net/embed/iframe/r9hj8x71z189c5.html?dnt=1&amp;controls=1&amp;hd=1&amp;autohide=1&amp;autoplay=1#?secret=g4N0ej5QrB&quot; data-secret=&quot;g4N0ej5QrB&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; width=&quot;640&quot; height=&quot;360&quot; frameborder=&quot;0&quot;&gt;&lt;/iframe&gt;"><img
                                        data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        class="lazyload" /><noscript><img
                                            data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            class="lazyload" /><noscript><img
                                                data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                class="lazyload" /><noscript><img
                                                    data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    class="lazyload" /><noscript><img
                                                        data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        class="lazyload" /><noscript><img
                                                            src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&amp;strip=1&amp;webp=1" /></noscript></noscript></noscript></noscript></noscript></button>
                            </div>
                            <div class="video-container"></div>
                        </div>

                        <div class="video" data-aos="fade-in" data-aos-delay="150">
                            <div class="text lazyload" style="background-image:inherit;"
                                 data-bg-image="url(&#039;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/05/CT-Choices.jpg?lossy=0&amp;strip=1&amp;webp=1&#039;)">
                                <h3>Choices define us</h3>
                                <button class="load-video-button"
                                        data-video-embed="&lt;iframe class=&quot;wp-embedded-content&quot; sandbox=&quot;allow-scripts&quot; security=&quot;restricted&quot; title=&quot;CT Choices Video (from ad) 1920x1080&quot; src=_https_/fast.wistia.net/embed/iframe/cxsnp7wyc389c5.html?dnt=1&amp;controls=1&amp;hd=1&amp;autohide=1&amp;autoplay=1#?secret=QarIUvtO5Q&quot; data-secret=&quot;QarIUvtO5Q&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; width=&quot;640&quot; height=&quot;360&quot; frameborder=&quot;0&quot;&gt;&lt;/iframe&gt;"><img
                                        data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        class="lazyload" /><noscript><img
                                            data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            class="lazyload" /><noscript><img
                                                data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                class="lazyload" /><noscript><img
                                                    data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    class="lazyload" /><noscript><img
                                                        data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        class="lazyload" /><noscript><img
                                                            src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&amp;strip=1&amp;webp=1" /></noscript></noscript></noscript></noscript></noscript></button>
                            </div>
                            <div class="video-container"></div>
                        </div>

                        <div class="video" data-aos="fade-in" data-aos-delay="150">
                            <div class="text lazyload" style="background-image:inherit;"
                                 data-bg-image="url(&#039;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/03/Screenshot-2022-03-08-at-14.29.31.png?lossy=0&amp;strip=1&amp;webp=1&#039;)">
                                <h3>Save the bees</h3>
                                <button class="load-video-button"
                                        data-video-embed="&lt;iframe class=&quot;wp-embedded-content&quot; sandbox=&quot;allow-scripts&quot; security=&quot;restricted&quot; title=&quot;2022 Save the Bees ad Video&quot; src=_https_/fast.wistia.net/embed/iframe/hwdxqmvnua89c5.html?dnt=1&amp;controls=1&amp;hd=1&amp;autohide=1&amp;autoplay=1#?secret=K8ouV8ISP9&quot; data-secret=&quot;K8ouV8ISP9&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; width=&quot;640&quot; height=&quot;360&quot; frameborder=&quot;0&quot;&gt;&lt;/iframe&gt;"><img
                                        data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        class="lazyload" /><noscript><img
                                            data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            class="lazyload" /><noscript><img
                                                data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                class="lazyload" /><noscript><img
                                                    data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    class="lazyload" /><noscript><img
                                                        data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        class="lazyload" /><noscript><img
                                                            src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&amp;strip=1&amp;webp=1" /></noscript></noscript></noscript></noscript></noscript></button>
                            </div>
                            <div class="video-container"></div>
                        </div>

                        <div class="video" data-aos="fade-in" data-aos-delay="150">
                            <div class="text lazyload" style="background-image:inherit;"
                                 data-bg-image="url(&#039;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/09/James-Lane-thumb.png?lossy=0&amp;strip=1&amp;webp=1&#039;)">
                                <h3>Entrepreneurial <em>culture</em></h3>
                                <button class="load-video-button"
                                        data-video-embed="&lt;iframe class=&quot;wp-embedded-content&quot; sandbox=&quot;allow-scripts&quot; security=&quot;restricted&quot; title=&quot;Why Choose Musgrave Rebuild Sept 2019 Video&quot; src=_https_/fast.wistia.net/embed/iframe/1s8oouoq7p89c5.html?dnt=1&amp;controls=1&amp;hd=1&amp;autohide=1&amp;autoplay=1#?secret=ac6bbszavX&quot; data-secret=&quot;ac6bbszavX&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; width=&quot;640&quot; height=&quot;360&quot; frameborder=&quot;0&quot;&gt;&lt;/iframe&gt;"><img
                                        data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        class="lazyload" /><noscript><img
                                            data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            class="lazyload" /><noscript><img
                                                data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                class="lazyload" /><noscript><img
                                                    data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    class="lazyload" /><noscript><img
                                                        data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&strip=1&webp=1"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        class="lazyload" /><noscript><img
                                                            src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/icon_play_aqua.png?lossy=0&amp;strip=1&amp;webp=1" /></noscript></noscript></noscript></noscript></noscript></button>
                            </div>
                            <div class="video-container"></div>
                        </div>
                    </div>

                    <div class="video-carousel" data-aos="fade-up" data-aos-delay="150">

                        <div class="block video">
                            <img loading="lazy"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/07/Our-sustainability-strategy-launch-at-SuperValu-Knocklyon-e1657787218659.png?lossy=0&strip=1&webp=1"
                                 data-video-data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/07/Our-sustainability-strategy-launch-at-SuperValu-Knocklyon-e1657787218659.png?lossy=0&strip=1&webp=1"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 class="lazyload" /><noscript><img loading="lazy"
                                                                   src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/07/Our-sustainability-strategy-launch-at-SuperValu-Knocklyon-e1657787218659.png?lossy=0&amp;strip=1&amp;webp=1"
                                                                   data-video-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/07/Our-sustainability-strategy-launch-at-SuperValu-Knocklyon-e1657787218659.png?lossy=0&amp;strip=1&amp;webp=1" /></noscript>
                        </div>

                        <div class="block video">
                            <img loading="lazy"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/07/musgrave-who-we-are-e1656668458271.png?lossy=0&strip=1&webp=1"
                                 data-video-data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/07/musgrave-who-we-are-e1656668458271.png?lossy=0&strip=1&webp=1"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 class="lazyload" /><noscript><img loading="lazy"
                                                                   src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/07/musgrave-who-we-are-e1656668458271.png?lossy=0&amp;strip=1&amp;webp=1"
                                                                   data-video-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/07/musgrave-who-we-are-e1656668458271.png?lossy=0&amp;strip=1&amp;webp=1" /></noscript>
                        </div>

                        <div class="block video">
                            <img loading="lazy"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/05/CT-Choices.jpg?lossy=0&strip=1&webp=1"
                                 data-video-data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/05/CT-Choices.jpg?lossy=0&strip=1&webp=1"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 class="lazyload" /><noscript><img loading="lazy"
                                                                   src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/05/CT-Choices.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                                                   data-video-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/05/CT-Choices.jpg?lossy=0&amp;strip=1&amp;webp=1" /></noscript>
                        </div>

                        <div class="block video">
                            <img loading="lazy"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/03/Screenshot-2022-03-08-at-14.29.31.png?lossy=0&strip=1&webp=1"
                                 data-video-data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/03/Screenshot-2022-03-08-at-14.29.31.png?lossy=0&strip=1&webp=1"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 class="lazyload" /><noscript><img loading="lazy"
                                                                   src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/03/Screenshot-2022-03-08-at-14.29.31.png?lossy=0&amp;strip=1&amp;webp=1"
                                                                   data-video-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2022/03/Screenshot-2022-03-08-at-14.29.31.png?lossy=0&amp;strip=1&amp;webp=1" /></noscript>
                        </div>

                        <div class="block video">
                            <img loading="lazy"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/09/James-Lane-thumb.png?lossy=0&strip=1&webp=1"
                                 data-video-data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/09/James-Lane-thumb.png?lossy=0&strip=1&webp=1"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 class="lazyload" /><noscript><img loading="lazy"
                                                                   src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/09/James-Lane-thumb.png?lossy=0&amp;strip=1&amp;webp=1"
                                                                   data-video-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/09/James-Lane-thumb.png?lossy=0&amp;strip=1&amp;webp=1" /></noscript>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            jQuery(document).ready(function ($) {
                $('.load-video-button').click(function () {
                    $('.slick-active .video-container').html($(this).data('video-embed'));
                    $('.videos-block .slick-active .text').hide();
                });
            });
        </script>
        <div class="values-container">
            <div class="container">
                <div class="values">
                    <h2 class="values-heading">Growing <em>Good</em> Business</h2>

                    <div class="blocks">
                        <div class="cat-block"><img loading="lazy" class="homepage-block lazyload"
                                                    data-aos="fade-in" data-aos-once="true"
                                                    data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2020/03/supporting-communities.png?lossy=0&strip=1&webp=1"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                    loading="lazy" class="homepage-block" data-aos="fade-in"
                                    data-aos-once="true"
                                    src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2020/03/supporting-communities.png?lossy=0&amp;strip=1&amp;webp=1" /></noscript>
                            <div class="text-block" data-aos="fade-up">
                                <h4>Our sustainability strategy</h4><a class="value-link"
                                                                       href="{{ route('page.sustainability') }}">Find out more</a>
                            </div>
                        </div>
                        <div class="cat-block"><img loading="lazy" class="homepage-block lazyload"
                                                    data-aos="fade-in" data-aos-once="true"
                                                    data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/09/1-in-3.png?lossy=0&strip=1&webp=1"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                    loading="lazy" class="homepage-block" data-aos="fade-in"
                                    data-aos-once="true"
                                    src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/09/1-in-3.png?lossy=0&amp;strip=1&amp;webp=1" /></noscript>
                            <div class="text-block" data-aos="fade-up">
                                <h4>Food leadership for more than 140 years</h4><a class="value-link"
                                                                                   href="{{ route('page.about.food') }}">Find out more</a>
                            </div>
                        </div>
                        <div class="cat-block"><img loading="lazy" class="homepage-block lazyload"
                                                    data-aos="fade-in" data-aos-once="true"
                                                    data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/09/1450.png?lossy=0&strip=1&webp=1"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                    loading="lazy" class="homepage-block" data-aos="fade-in"
                                    data-aos-once="true"
                                    src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/09/1450.png?lossy=0&amp;strip=1&amp;webp=1" /></noscript>
                            <div class="text-block" data-aos="fade-up">
                                <h4>Supporting retailers and communities in Ireland and Spain</h4><a
                                    class="value-link" href="{{ route('page.about.partners') }}">Find
                                    out more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-news/>
        <section class="brands-block">
            <div class="container">
                <h3 class="entry-title" data-aos="fade-in" data-aos-delay="150">
                    We own 15 retail and wholesale brands
                </h3>
                <p class="sub" data-aos="fade-in" data-aos-delay="150">
                    Discover more about our market-leading brands by selecting a brand below
                </p>

                <div class="brands-thumbs">
                    <ul>
                        @foreach($brands as $brand)
                            <li class="logo-item {{ $loop -> first ? 'active' : '' }}" id="trigger-{{ $loop->index }}" data-target-id="target-{{ $loop->index }}">
                                <img alt="{{ $brand -> title }}" src="{{ asset($brand->logo->path) }}" class="lazyload" />
                                <noscript>
                                    <img src="{{ asset($brand->logo->path) }}" alt="{{ $brand -> title }}" />
                                </noscript>
                            </li>
                        @endforeach
                    </ul>
                    <img class="point-down lazyload"
                         data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/brands/down_arrow_solid.png?lossy=0&strip=1&webp=1"
                         alt="Down Arrow" title="Down Arrow"
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                            class="point-down"
                            src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/brands/down_arrow_solid.png?lossy=0&amp;strip=1&amp;webp=1"
                            alt="Down Arrow" title="Down Arrow"></noscript>
                </div>

                <div class="expander">
                    @foreach($brands as $brand)
                        <div class="brand-expander {{ $loop->first ? 'active' : '' }}" id="target-{{ $loop->index }}">
                            <img class="main-img lazyload" alt="{{ $brand->title }}" src="{{ $brand -> logo -> path }}" />
                            <noscript>
                                <img class="main-img" src="{{ $brand -> logo -> path }}" alt="{{ $brand->title }}" />
                            </noscript>
                            <div class="brand-content" data-aos="fade-up" data-aos-once="true">
                                <div class="brand-text">
                                    <h4>{{ $brand -> title }}</h4>
                                    <p>{!! $brand -> small_description !!}</p>
                                    <a class="button" target="_blank" href="{{ $brand -> url }}">
                                        Find out more
                                    </a>
                                </div>
                                @if($brand->news)
                                    <div class="brand-article">
                                        <a href="{{ route('page.news.show', $brand->news->url) }}">
                                            <img width="300" height="200"
                                                 class="attachment-medium size-medium wp-post-image lazyload" alt=""
                                                 decoding="async"
                                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                                 src="{{ $brand->news->media->path }}"
                                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;" />
                                            <noscript>
                                                <img
                                                    width="300" height="200"
                                                    src="{{ $brand->news->media->path }}"
                                                    class="attachment-medium size-medium wp-post-image" alt=""
                                                    decoding="async"
                                                    sizes="(max-width: 300px) 100vw, 300px" />
                                            </noscript>
                                        </a>
                                        <h4><a href="{{ route('page.news.show', $brand->news->url) }}">{{ $brand->news->title }}</a></h4>
                                        {{ $brand->news->small_description }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection
