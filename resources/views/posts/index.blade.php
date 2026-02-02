<div>
    @if (! count($posts))
        <p>Nothing here yet!</p>
    @else
        <p>{{$posts->last()->title}}</p>
    @endif
</div>
