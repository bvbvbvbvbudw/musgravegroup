<div class="sustainability-reports">
    <div class="container">
        <h3 class="main-title">Sustainability reports</h3>
        <p class="sub-title">Find our archived sustainability reports for download below</p>
        <div class="sustainability-reports-grid">
            @foreach($reports as $report)
                <a target="_blank" href="{{ asset($report -> file -> path) }}"
                   class="block number-block">
                    <img alt="" src="{{ asset($report -> media -> path) }}" class="lazyload"/>
                    <noscript>
                        <img src="{{ asset($report -> media -> path) }}" alt=""/>
                    </noscript>
                    <h4>{{ $report -> title }}</h4>
                </a>
            @endforeach
        </div>
    </div>
    <a id="loadMore" class="button">View more (TODO MAKE LOGIC)</a>

</div>
