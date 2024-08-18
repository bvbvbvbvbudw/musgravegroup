@extends('musgravegroup.base')
@section('body-classes', 'page-template page-template-page-templates page-template-page-content page-template-page-templatespage-content-php page page-id-8028 wp-custom-logo')
@section('title', 'Moo’d Ice cream')
@section('content')
    <article id="post-8028" class="post-8028 page type-page status-publish hentry">
        <div class="colour-block orange"></div>
        <header class="entry-header">
            <div class="container">
                <h1>Moo’d Ice cream</h1>
                <h3></h3>
            </div>
        </header>
        <div class="entry-content container content-block aos-init aos-animate" data-aos="fade-up">
            <div class="wistia_embed wistia_async_ popover=true popoverContent=html"
                 style="display:inline-block; white-space:nowrap;">
                <a href="#" class="video-image simple">
                    <img src="" alt="" title="">
                </a>
            </div>
            <script src="https://fast.wistia.com/embed/medias/4f8qvqcvm1.jsonp" async=""></script>
            <script src="https://fast.wistia.com/assets/external/E-v1.js" async=""></script>
            <div class="generic-padding aos-init aos-animate" data-aos="fade-in" data-aos-delay="350">
                <p>Moo’d is our exclusive ice cream brand that is now available in over 200 SuperValu and Centra stores
                    across the island of Ireland. Moo’d is a youthful and fun brand, which has its roots in the local
                    Irish dairy industry, made by a family-run business in Cavan.</p>
                <p>It appeals to millennials with Italian gelato ingredients and flavours. Alongside the popular menu of
                    ice cream cones, tubs, ‘whirlies’, sundaes and milkshakes, this year we launched new take-home packs
                    in three flavours.</p>
                <div class="generic-padding aos-init aos-animate" data-aos="fade-in" data-aos-delay="350">
                    <div class="related-content">
                        <div class="related-column aos-init aos-animate" data-aos="fade-up">
                            <div class="background-zoom lazyloaded"
                                 style="background-image: url(&quot;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/caramico_v2.jpg?lossy=0&amp;strip=1&amp;webp=1&quot;);"
                                 data-bg-image="url(https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/caramico_v2.jpg?lossy=0&amp;strip=1&amp;webp=1)"></div>
                            <a href="{{ route('page.pizza') }}/"></a>
                            <h2><a href="{{ route('page.pizza') }}">Caramico Pizza</a></h2></div>
                        <div class="related-column aos-init aos-animate" data-aos="fade-up">
                            <div class="background-zoom lazyloaded"
                                 style="background-image: url(&quot;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/the-green-kitchen.jpg?lossy=0&amp;strip=1&amp;webp=1&quot;);"
                                 data-bg-image="url(https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/the-green-kitchen.jpg?lossy=0&amp;strip=1&amp;webp=1)"></div>
                            <a href="{{ route('page.kitchen') }}"></a>
                            <h2><a href="{{ route('page.kitchen') }}">The Green Kitchen</a></h2>
                        </div>
                        <div class="related-column aos-init aos-animate" data-aos="fade-up">
                            <div class="background-zoom lazyloaded"
                                 style="background-image: url(&quot;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/our-brands-1.jpg?lossy=0&amp;strip=1&amp;webp=1&quot;);"
                                 data-bg-image="url(https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/our-brands-1.jpg?lossy=0&amp;strip=1&amp;webp=1)"></div>
                            <a href="{{ route('page.brand') }}"></a>
                            <h2><a href="{{ route('page.brand') }}">Back to brands</a></h2></div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <x-news/>
@endsection
