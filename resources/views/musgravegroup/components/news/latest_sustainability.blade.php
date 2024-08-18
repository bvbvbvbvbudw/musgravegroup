<div class="new-posts-grid-bg">

    <div class="container">
        <h3 class="main-title">Sustainability news</h3>
        <p class="sub-title">Related sustainability news from across the site</p>
    </div>

    <div class="new-posts-grid">

    </div>

    <a id="loadMoreNews" class="button" style="cursor: pointer;">More sustainability posts</a>
</div>
<script>
    const routes = {
        newsSustainabilityShow: "{{ route('page.news.sus.show', ['url' => '__URL__']) }}",
    };
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let currentPage = 1;
        let totalPages = 1;
        const newsGrid = document.querySelector('.new-posts-grid');
        const loadMoreButton = document.getElementById('loadMoreNews');
        const location = window.location.origin;
        fetchNews(currentPage);
        loadMoreButton.addEventListener('click', function () {
            if (currentPage < totalPages) {
                currentPage++;
                fetchNews(currentPage);
            }
        });
        function fetchNews(page) {
            fetch(`/api/news-sustainability?page=${page}`)
                .then(response => response.json())
                .then(data => {
                    totalPages = data.last_page;
                    data.data.forEach(newsItem => {
                        const newsElement = document.createElement('a');
                        const newsUrl = routes.newsSustainabilityShow.replace('__URL__', encodeURIComponent(newsItem.url));
                        newsElement.setAttribute('href', newsUrl);

                        newsElement.classList.add('block', 'lazyload');
                        newsElement.style.backgroundImage = `url('${location}/${encodeURI(newsItem.media.path)}')`;

                        const textDiv = document.createElement('div');
                        textDiv.classList.add('text');

                        const dateSpan = document.createElement('span');
                        dateSpan.textContent = newsItem.formatted_date;
                        textDiv.appendChild(dateSpan);

                        const titleH4 = document.createElement('h4');
                        titleH4.textContent = newsItem.title;
                        textDiv.appendChild(titleH4);

                        newsElement.appendChild(textDiv);
                        newsGrid.appendChild(newsElement);
                    });

                    if (currentPage >= totalPages) {
                        loadMoreButton.style.display = 'none';
                    }
                })
                .catch(error => console.error('Error fetching news:', error));
        }
    });
</script>
