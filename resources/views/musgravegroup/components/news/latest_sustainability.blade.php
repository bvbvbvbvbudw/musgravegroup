<div class="new-posts-grid-bg">

    <div class="container">
        <h3 class="main-title">Sustainability news</h3>
        <p class="sub-title">Related sustainability news from across the site</p>
    </div>

    <div class="new-posts-grid">
        @foreach($news as $item)
            <a href="{{ route('page.news.sus.show', $item->url) }}" class="block lazyload"
               style="background-image:inherit"
               data-bg-image="url({{ asset($item->media->path) }})">
                <div class="text">
                    <span>{{ $item->formatted_date }}</span>
                    <h4>{{ $item->title }}</h4>
                </div>
            </a>
        @endforeach
    </div>

    <a class="button" href="{{ route('page.news.sus') }}">More sustainability posts</a>
</div>
