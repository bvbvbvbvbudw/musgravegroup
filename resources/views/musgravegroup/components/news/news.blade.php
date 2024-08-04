@php
    use Carbon\Carbon;

    $news = $news->map(function ($item) {
        $item->formatted_date = Carbon::parse($item->created_at)->format('jS F Y');
        $item->image_url = asset($item->media->path);
        return $item;
    });

    $popularNews = $news->firstWhere('is_popular', true);
@endphp

<div class="latest-feature">
    <div class="container">
        <div class="grid new-feature-grid">
            @if($popularNews)
                <div class="latest-feature-main-new">
                    <div class="category-listing">
                        <article id="post-{{ $popularNews->id }}" class="category-listing post-{{ $popularNews->id }} post type-post status-publish format-standard has-post-thumbnail hentry category-news category-supervalu">
                            <div class="entry-header">
                                <h2>Latest feature from <em>News</em></h2>
                                <span class="the-date">| {{ $popularNews->formatted_date }}</span>
                            </div>
                            <a class="feat-img" href="{{ route('page.news.show', $popularNews->url) }}">
                                <span class="the-date">{{ $popularNews->formatted_date }}</span>
                                <div class="image lazyload" style="background-image:url('{{ $popularNews->image_url }}')"></div>
                            </a>
                            <div class="text-block">
                                <div class="post-meta">
                                    <a href="{{ route('page.news') }}">News</a>
                                </div>
                                <div class="post-content">
                                    <h3 class="entry-title">
                                        <a href="{{ route('page.news.show', $popularNews->url) }}">
                                            {{ $popularNews->title }}
                                        </a>
                                    </h3>
                                    <p>{{ $popularNews->small_description }}</p>
                                    <a class="find-out-more" href="{{ route('page.news') }}">
                                        Find out more
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            @endif

            <div class="latest-feature-new-nav grid-setter">
                @foreach($news as $item)
                    @if(!$item->is_popular)
                        <a href="{{ route('page.news.show', $item->url) }}">
                            <article id="post-{{ $item->id }}" class="category-listing post-{{ $item->id }} post type-post status-publish format-standard has-post-thumbnail hentry category-centra tag-run-together">
                                <div class="img">
                                    <img width="300" height="200" src="{{ $item->image_url }}" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" fetchpriority="high" sizes="(max-width: 300px) 100vw, 300px" />
                                </div>
                                <div class="text-block">
                                    <span>{{ $item->category }}</span>
                                    <h3 class="entry-title">
                                        {{ $item->title }}
                                        <img data-src="{{ asset('path/to/icon_goto.png') }}" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" alt="">
                                    </h3>
                                </div>
                            </article>
                        </a>
                    @endif
                @endforeach
            </div>
            <a href="{{ route('page.news') }}" class="plus-link">View all news <span>+</span></a>
        </div>
    </div>
</div>
