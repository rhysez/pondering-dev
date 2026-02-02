<x-layout>
    @if (! count($posts))
        <p>Nothing here yet!</p>
    @else
        @foreach($posts as $post)
            <p>{{$post->title}}</p>
        @endforeach
    @endif
</x-layout>
