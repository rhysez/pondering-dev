<x-layout>
    @if (! count($posts))
        <p>Nothing here yet!</p>
    @else
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4">
            @foreach($posts as $post)
                <a href="{{ route('posts.view', ['slug' => $post->slug]) }}" class="transition-colors hover:bg-red-500 flex flex-col gap-4 text-neutral-100 bg-neutral-900 px-6 py-4 rounded-sm">
                    <h2 class="font-bold text-3xl">{{substr($post->title, 0, 22)}}...</h2>
                    <article>{{substr($post->body, 0, 220)}}...</article>
                </a>
            @endforeach
        </div>
    @endif
</x-layout>
