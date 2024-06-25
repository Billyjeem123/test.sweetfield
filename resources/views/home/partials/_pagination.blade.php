<!-- resources/views/partials/_pagination.blade.php -->

@if($items->count() > 0)
    <!-- Pagination Section -->
    <div class="pagination-section">
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center flex-wrap">
                    @if ($items->onFirstPage())
                        <li class="page-item disabled"><span class="page-link">Prev</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $items->previousPageUrl() }}">Prev</a></li>
                    @endif

                    @foreach ($items->getUrlRange(1, $items->lastPage()) as $page => $url)
                        <li class="page-item {{ ($page == $items->currentPage()) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    @if ($items->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $items->nextPageUrl() }}">Next</a></li>
                    @else
                        <li class="page-item disabled"><span class="page-link">Next</span></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
@endif
