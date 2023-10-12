@if ($paginator->lastPage() != 1)
<div align="center" id="pagination">
   

    @if ($paginator->currentPage() != 1)
        <a href="{{ $paginator->previousPageUrl() }}">&lt; Precedente</a> |
    @else
        &lt; Precedente |
    @endif
    
    @if ($paginator->total() % 2 == 0)

        @for($page = 1; $page <= ($paginator->total()/5 )  ; $page++)
        <a href="{{ $paginator->url($page) }}" > {{ $page }}</a> | 
        @endfor
    @else 
        @for($page = 1; $page <= ($paginator->total()/5 ) +1   ; $page++)
        <a href="{{ $paginator->url($page) }}" > {{ $page }}</a> | 
        @endfor
    @endif

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}">Successivo &gt;</a> |
    @else
        Successivo &gt; 
    @endif

   
</div>
@endif
