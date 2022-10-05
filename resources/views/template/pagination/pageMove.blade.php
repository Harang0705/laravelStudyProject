<div class="pagination">
    @if (
            is_null($page) === true ? false : ($page >= 2 ? true : false)
        )
        <div class="prevPage">
            <a href="{{ $paginator->previousPageUrl() }}"><</a>
        </div>
    @endif
    <div class="paginateNumber">
        @if ($page < 4)
            @for ($__i = 1; $__i <= 5; $__i++)
                <a href="{{ $paginator->url($__i) }}">{{ $__i }}</a>
            @endfor
        @elseif ($paginator->lastPage() <= $page + 2)
            @for ($__j = 4; $__j >= 0; $__j--)
                <a href="{{ $paginator->url($paginator->lastPage() - $__j) }}">{{ $paginator->lastPage() - $__j }}</a>
            @endfor
        @else
            @for ($__k = -2; $__k <= 2; $__k++)
                <a href="{{ $paginator->url($page + $__k) }}">{{ $page + $__k }}</a>
            @endfor
        @endif
    </div>
    @if (
            $paginator->lastPage() != $page
        )
        <div class="nextPage">
            <a href="{{ $paginator->nextPageUrl() }}">></a>
        </div>
    @endif
</div>