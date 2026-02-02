<div>
    @if (! count($posts))
        <p>Nothing here yet!</p>
    @else
        <p>Latest post: {{$posts->last()->title}}</p>
    @endif
</div>
