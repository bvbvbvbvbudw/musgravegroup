@extends('musgravegroup.base')
@section('body-classes', 'page-template page-template-page-templates page-template-page-content page-template-page-templatespage-content-php page page-id-8030 wp-custom-logo')
@section('title', 'Caramico Pizza')
@section('content')
    <article id="post-8030" class="post-8030 page type-page status-publish hentry">
        <div class="colour-block orange"></div>
        <header class="entry-header">
            <div class="container">
                <h1>Caramico Pizza</h1>
                <h3></h3>
            </div>
        </header>
        <div class="entry-content container content-block aos-init aos-animate" data-aos="fade-up">
            <div class="wistia_embed wistia_async_ popover=true popoverContent=html"
                 style="display:inline-block; white-space:nowrap;"><a href="#" class="video-image simple"><img
                        src="" alt="" title=""></a></div>
            <script src="https://fast.wistia.com/embed/medias/4f8qvqcvm1.jsonp" async=""></script>
            <script src="https://fast.wistia.com/assets/external/E-v1.js" async=""></script>
            <div class="generic-padding aos-init aos-animate" data-aos="fade-in" data-aos-delay="350">
                <p>Caramico is our artisan pizza take-away brand, currently exclusively available in a select number
                    of Centra stores. The concept marries authentic stone-baked pizzas with premium toppings, such
                    as Fior Di Latte mozzarella and locally-sourced produce, such as cheese from Gubbeen Farmhouse
                    in West Cork and Hampshire ham from the Bogue’s farm in Co Cavan.</p>
                <p>In line with our sustainable approach to business, we use only fully compostable pizza boxes
                    within our Caramico brand.</p>
                <div class="generic-padding aos-init aos-animate" data-aos="fade-in" data-aos-delay="350">
                    <div class="related-content">
                        <div class="related-column aos-init aos-animate" data-aos="fade-up">
                            <div class="background-zoom lazyloaded"
                                 style="background-image: url(&quot;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/brands-1.jpg?lossy=0&amp;strip=1&amp;webp=1&quot;);"
                                 data-bg-image="url(https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/brands-1.jpg?lossy=0&amp;strip=1&amp;webp=1)"></div>
                            <a href="{{ route('page.mood') }}"></a>
                            <h2><a href="{{ route('page.mood') }}">Moo'd Ice-cream</a></h2>
                        </div>
                        <div class="related-column aos-init aos-animate" data-aos="fade-up">
                            <div class="background-zoom lazyloaded"
                                 style="background-image: url(&quot;https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/the-green-kitchen.jpg?lossy=0&amp;strip=1&amp;webp=1&quot;);"
                                 data-bg-image="url(https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/08/the-green-kitchen.jpg?lossy=0&amp;strip=1&amp;webp=1)"></div>
                            <a href="{{ route('page.kitchen') }}"></a>
                            <h2><a href="{{ route('page.kitchen') }}">The Green Kitchen</a>
                            </h2></div>
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
