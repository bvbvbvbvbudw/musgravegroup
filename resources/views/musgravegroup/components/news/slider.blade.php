<section class="trending-articles">
    <div class="container">
        <h2>Posts you might be interested in</h2>
        <div class="slide">
            @foreach($news as $item)
                <div class="block news-color">
                    <img width="300" height="200"
                         class="attachment-medium size-medium wp-post-image lazyload" alt=""
                         decoding="async" loading="lazy"
                         data-sizes="(max-width: 300px) 100vw, 300px"
                         src="{{ $item->media->path }}"
                         style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;"/>
                    <noscript><img
                            width="300" height="200"
                            src="{{ $item->media->path }}"
                            class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                            loading="lazy"
                            sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                    <div class="colour-block"></div>
                    <div class="text">
                        <h3><a
                                href="{{ route('page.news.show', $item -> url) }}">{{ $item -> title }}</a></h3>
                        <p>{{ $item -> small_description }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
