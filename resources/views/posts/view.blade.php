<x-layout>
    <main class="flex flex-col mx-auto gap-4 text-neutral-800 xl:w-1/2 md:w-[75%]">
        <a href="{{route('home')}}" class="px-4 py-2 text-neutral-100 bg-neutral-800 rounded-full hover:bg-red-500 transition-colors w-fit flex items-center gap-2 mb-4">
            <x-lucide-arrow-left class="w-5 h-5" />
            <p>Back to home</p>
        </a>
        <h1 class="lg:text-6xl font-bold">{{$post->title}}</h1>
        <article class="lg:text-lg text-base">
            {{$post->body}}
        </article>
        <div class="space-y-6 mt-4">
            <h4 class="text-neutral-800 text-2xl font-extrabold">Comments ({{$post->comments->count()}})</h4>
            <div class="flex flex-col space-y-2">
                @foreach($post->comments as $comment)
                    <div class="p-2 bg-neutral-800 text-neutral-100 rounded-md space-y-4 text-sm">
                        <p class="font-bold">{{$comment->body}}</p>
                        <span class="italic font-light">
                            by a cool person on {{\Carbon\Carbon::create($comment->created_at)->toFormattedDateString()}}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</x-layout>
