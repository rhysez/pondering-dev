<x-layout>
    @if (! count($posts))
        <p>Hmm, nothing here yet.</p>
    @else
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4">
            @foreach($posts as $post)
                <a
                    href="{{ route('posts.view', ['slug' => $post->slug]) }}"
                    class="transition-colors hover:bg-red-500 hover:outline-red-500 flex flex-col gap-4 text-neutral-100 bg-neutral-900 outline-4 outline-offset-2 px-6 py-4 rounded-md"
                >
                    @if(strlen($post->title >= 40))
                        <h2 class="font-bold text-3xl">{{substr($post->title, 0, 40)}}...</h2>
                    @else
                        <h2 class="font-bold text-3xl">{{$post->title}}</h2>
                    @endif
                    <article>{{substr($post->body, 0, 220)}}...</article>
                    <div class="flex items-center justify-between mt-auto">
                        <span class="text-xs">added {{\Carbon\Carbon::create($post->created_at)->toFormattedDateString()}}</span>
                        <div class="flex items-center justify-end gap-1">
                            <x-lucide-message-circle class="w-5 h-5 text-neutral-100" />
                            <span class="text-neutral-100">{{$post->comments->count()}}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
</x-layout>
