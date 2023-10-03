@if ($paginator->hasPages())


<div class="pagination_container">
    <div class="pagination">
        
        <ul>

            @if ($paginator->onFirstPage())
            <li class="btn1 disabled" onclick="backBtn()" aria-disabled="true" aria-label="@lang('pagination.previous')">
                
            </li>
            
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"> <span> << </span> </a>
                </li>
            @endif

            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="link active" aria-current="page" value="1" onclick="activeLink()"><a href="{{ $url }}">{{ $page }}</a></li>
                        @else
                            <li><a class="link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li onclick="nextBtn()" class="btn2">
                    <a  href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"> <span>  >></span></a>
                </li>
            
            @endif

            
            
            
        </ul>
    </div>
</div>


@endif





