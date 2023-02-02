@if ($paginator->hasPages())
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pagination-area">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                            {{-- Previous Page Link --}}
                            @if ($paginator->onFirstPage())
                                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                    <span class="page-numbers" aria-hidden="true"><i
                                            class="ri-arrow-right-line"></i></i></span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="next page-numbers" href="{{ $paginator->previousPageUrl() }}"
                                        rel="prev" aria-label="@lang('pagination.previous')"
                                        style="position: unset !important;"><i class="ri-arrow-right-line"></i></a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <li class="page-item disabled" aria-disabled="true"><span
                                            class="page-numbers">{{ $element }}</span></li>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $paginator->currentPage())
                                            <li class="page-item active" aria-current="page"><span
                                                    class="page-numbers current">{{ $page }}</span></li>
                                        @else
                                            <li class="page-item"><a class="page-numbers"
                                                    href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($paginator->hasMorePages())
                                <li class="page-item">
                                    <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next"
                                        aria-label="@lang('pagination.next')" style="position: unset !important;"><i
                                            class="ri-arrow-left-line"></i></a>
                                </li>
                            @else
                                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                    <span class="page-numbers" aria-hidden="true"><i
                                            class="ri-arrow-left-line"></i></span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endif
