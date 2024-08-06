<div class="new-posts-grid-bg">
    <div class="container">
        <h3 class="main-title">Latest from Musgrave Group</h3>
    </div>
    <div class="new-posts-grid">
        @foreach($news as $item)
            <a href="{{ route('page.news.show', $item -> url) }}"
               class="block lazyload" style="background-image:inherit"
               data-bg-image="url({{asset($item->media->path)}})">
                <div class="text">
                    <span>{{ $item->formatted_date }}</span>
                    <h4>{{ $item->title }}</h4>
                </div>
            </a>
        @endforeach
    </div>
</div>
