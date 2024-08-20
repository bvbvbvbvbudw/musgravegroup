@extends('musgravegroup.base')
@section('title', 'Brands')
@section('body-classes', 'archive post-type-archive post-type-archive-brands wp-custom-logo hfeed')
@section('content')
    <section class="blog-hero lazyload" style="background-image:url('{{asset('img/brands/brands.webp')}}')">
        <div class="text">
            <h1>Brands</h1>
        </div>
    </section>

    <div class="container">
        <div class="brand-page-content" data-aos="fade-up" data-aos-once="true">
            <div class="brands-text-block">
                <h2>Discover our brands</h2>
                <p><strong>We own 15 food retail and wholesale brands, many of which are high street stores you see and
                        shop in every day.</strong></p>
                <p>And whilst you’ll know SuperValu and Centra, you may not know that Musgrave owns these brands along
                    with top Irish coffee brand Frank and Honest, high-end Dublin food chain Donnybrook Fair and Spanish
                    supermarket Dialprix. We also own the largest wholesale and foodservice business in Ireland,
                    Musgrave MarketPlace, and we are exporting our brands globally.</p>
                <p class="discover-brands">Discover more about our brands by selecting them below.</p>

            </div>

            <section class="brands-block">

                <div class="brands-thumbs">
                    <ul>
                        @foreach($brands as $brand)
                            <li class="logo-item {{ $loop->first ? 'active' : '' }}" id="trigger-{{ $loop -> index }}"
                                data-target-id="target-{{ $loop -> index }}">
                                <img
                                    data-src="{{ asset($brand->logo->path) }}"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    class="lazyload"/>
                                <noscript><img
                                        src="{{ asset($brand->logo->path) }}"/>
                                </noscript>
                            </li>
                        @endforeach
                    </ul>
                    <img class="point-down lazyload"
                         data-src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/brands/down_arrow_solid.png?lossy=0&strip=1&webp=1"
                         alt="" title=""
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                    <noscript><img class="point-down"
                                   src="https://b2833840.smushcdn.com/2833840/wp-content/themes/musgrave/img/brands/down_arrow_solid.png?lossy=0&amp;strip=1&amp;webp=1"
                                   alt="" title=""></noscript>
                </div>

                <div class="expander">
                    @foreach($brands as $brand)
                        <div class="brand-expander {{ $loop->first ? 'active' : '' }}" id="target-{{ $loop->index }}">
                            <img data-aos="fade-in" class="main-img lazyload"
                                 src="{{ asset($brand->bg->path) }}"/>
                            <noscript>
                                <img data-aos="fade-in" class="main-img" src="{{ asset($brand->bg->path) }}"/>
                            </noscript>
                            <div class="brand-content" data-aos="fade-in" data-aos-once="true">
                                <div class="brand-text">
                                    <h4>{{ $brand -> title }}</h4>
                                    <p>{!! $brand->small_description !!}</p>
                                    <a class="button" href="{{ $brand->url }}" target="_blank">Find out more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="related-content">
                    <div class="related-column" data-aos="fade-up" data-aos-once="true">
                        <div class="background-zoom lazyload"
                             style="background-image:url('{{asset('img/brands/sub-brands.webp')}}');"></div>
                        <a href="{{ route('page.mood') }}"><h2>Moo'd Ice Cream</h2></a></div>
                    <div class="related-column" data-aos="fade-up" data-aos-once="true">
                        <div class="background-zoom lazyload"
                             style="background-image:url('{{asset('img/brands/caramico_v2.webp')}}');"></div>
                        <a href="{{ route('page.pizza') }}"><h2>Caramico Pizza</h2></a></div>
                    <div class="related-column" data-aos="fade-up" data-aos-once="true">
                        <div class="background-zoom lazyload"
                             style="background-image:url('{{asset('img/brands/the-green-kitchen.webp')}}');"></div>
                        <a href="{{ route('page.pizza') }}"><h2>The Green Kitchen</h2></a></div>
                </div>
            </section>
        </div>
    </div>
@endsection
