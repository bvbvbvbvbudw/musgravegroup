<div class="sustainability-reports">
    <div class="container">
        <h3 class="main-title">Sustainability reports</h3>
        <p class="sub-title">Find our archived sustainability reports for download below</p>
        <div class="sustainability-reports-grid">
            @foreach($reports as $report)
                <a target="_blank" href="{{ $report->file->path }}" class="block number-block">
                    <img alt="" src="{{ $report->media->path }}" class="lazyload"/>
                    <noscript>
                        <img src="{{ $report->media->path }}" alt=""/>
                    </noscript>
                    <h4>{{ $report->title }}</h4>
                </a>
            @endforeach
        </div>
    </div>
    <a id="loadMore" class="button">Show more</a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let currentPage = 1; // Текущая страница
        let totalPages = 1; // Общее количество страниц
        const reportsGrid = document.querySelector('.sustainability-reports-grid');
        const loadMoreButton = document.getElementById('loadMore');

        // Изначальная загрузка первой страницы
        fetchReports(currentPage);

        loadMoreButton.addEventListener('click', function () {
            if (currentPage < totalPages) {
                currentPage++;
                fetchReports(currentPage);
            }
        });

        function fetchReports(page) {
            fetch(`/api/reports?page=${page}`)
                .then(response => response.json())
                .then(data => {
                    totalPages = data.last_page;

                    data.data.forEach(report => {
                        const reportElement = document.createElement('a');
                        reportElement.setAttribute('target', '_blank');
                        reportElement.setAttribute('href', report.file.path);
                        reportElement.classList.add('block', 'number-block');

                        const img = document.createElement('img');
                        img.setAttribute('src', report.media.path);
                        img.classList.add('lazyload');
                        reportElement.appendChild(img);

                        const title = document.createElement('h4');
                        title.textContent = report.title;
                        reportElement.appendChild(title);

                        reportsGrid.appendChild(reportElement);
                    });
                    if (currentPage >= totalPages) {
                        loadMoreButton.style.display = 'none';
                    }
                })
                .catch(error => console.error('Error fetching reports:', error));
        }
    });
</script>
