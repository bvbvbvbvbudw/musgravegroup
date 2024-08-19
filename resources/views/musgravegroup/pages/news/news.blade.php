@extends('musgravegroup.base')
@section('body-classes', 'page-template page-template-page-templates page-template-page-test-blog page-template-page-templatespage-test-blog-php page page-id-9579 wp-custom-logo')

@section('content')
    <div class="filter-options">
        <div class="blog-list-archive is-on">
            <span>Filter by date</span>
            <div class="stay">
                @foreach($dates as $year => $months)
                    <li class="drop">
                        <a class="arrow" href="JavaScript:void()">{{ $year }}</a>
                        <ul class="archive-sub-menu">
                            @foreach($months as $month)
                                <li>
                                    <a href="{{ url('/news/' . $year . '/' . str_pad($month->month, 2, '0', STR_PAD_LEFT)) }}">
                                        {{ \Carbon\Carbon::create()->month($month->month)->format('F') }} {{ $year }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </div>
        </div>

        <div class="cat-list-archive is-on">
            <span>Filter by brand</span>
            <div class="stay">
                <ul>
                    <li></li>
                    @foreach($brands as $brand)
                        <li>
                            <a href="{{ route('page.news.filterByBrand', ['brand' => $brand->url]) }}">
                                {{ $brand->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.blog-list-archive .stay').hide();
            $('.blog-list-archive li ul').hide();
            $('.blog-list-archive li:first-of-type ul').show();
            $('.blog-list-archive span').click(function () {
                $('.blog-list-archive .stay').slideDown().animate({
                    'left': '0'
                }, 175);
                $(this).parent().toggleClass('span-selected');

                if ($(".is-on").hasClass("span-selected")) {
                    $("body").addClass("overlay-on");
                } else {
                    $("body").removeClass("overlay-on");
                }


            });


            $('.blog-list-archive li a').click(function () {
                $(this).parent().addClass('selected');
                $(this).parent().children('ul').toggle();
                $(this).parent().siblings().children('ul').slideUp(250);
                $(this).parent().siblings().removeClass('selected');
                e.preventDefault();
            });

            $('.cat-list-archive .stay').hide();
            $('.cat-list-archive span').click(function () {
                $('.cat-list-archive .stay').slideDown().animate({
                    'right': '0'
                }, 175);
                $(this).parent().toggleClass('span-selected');

                if ($(".is-on").hasClass("span-selected")) {
                    $("body").addClass("overlay-on");
                } else {
                    $("body").removeClass("overlay-on");
                }

            });

        });

    </script>
    <div class="container filter-overlay">
        <div class="filtered-posts">
            @foreach($news as $item)
                <div class="cat-block centra-color ">
                    <p class="colour-block post-date">{{ $item->formatted_date }}</p>
                    <a href="{{ route('page.news.show', $item->url) }}">
                        <img width="300" height="200" src="{{ asset($item->media->path) }}" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" fetchpriority="high" sizes="(max-width: 300px) 100vw, 300px">
                        <div class="colour-block"></div>
                    </a>
                    <div class="text">
                        <a href="{{ route('page.news.show', $item->url) }}"></a>
                        <h3>
                            <a href="{{ route('page.news.show', $item->url) }}"></a>
                            <a href="{{ route('page.news.show', $item->url) }}">{{ $item->title }}</a>
                        </h3>
                        <p>{{ $item->small_description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $news->links('musgravegroup.pagination') }}
@endsection
