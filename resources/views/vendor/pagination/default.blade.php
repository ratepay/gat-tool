@if ($paginator->hasPages())
    <ul class="flex list-reset">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span class="block bg-white text-blue border-r border-grey-light px-3 py-2">&laquo;</span></li>
        @else
            <li><a class="block bg-white hover:text-white hover:bg-blue text-blue border-r border-grey-light px-3 py-2 no-underline" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><span class="block text-white bg-blue border-r border-blue px-3 py-2">{{ $page }}</span></li>
                    @else
                        <li><a class="block bg-white hover:text-white hover:bg-blue text-blue border-r border-grey-light px-3 py-2" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a class="block bg-white hover:text-white hover:bg-blue text-blue border-r border-grey-light px-3 py-2 no-underline no-underline" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="disabled"><span class="block bg-white text-blue border-r border-grey-light px-3 py-2">&raquo;</span></li>
        @endif
    </ul>
@endif
