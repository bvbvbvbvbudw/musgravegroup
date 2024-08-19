@if ($paginator->hasPages())
    <div class="wrapper-pag">
        <nav class="pagination-wrapper" aria-label="Page navigation">
            <ul class="pagination">
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Back</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Back</a>
                    </li>
                @endif
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="page-item disabled">
                            <span class="page-link">{{ $element }}</span>
                        </li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active">
                                    <span class="page-link">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
    <style>
        .wrapper-pag {
            display: flex;
            margin: 2% 0 2% 0;
        }
        .pagination-wrapper {
            margin: 0 auto;
        }

        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .page-item {
            margin: 0 2px;
        }

        .page-link {
            display: block;
            padding: 8px 16px;
            text-decoration: none;
            color: #007bff;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .page-link:hover {
            background-color: #f8f9fa;
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            cursor: not-allowed;
        }

        .page-item.active .page-link {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
    </style>
@endif
