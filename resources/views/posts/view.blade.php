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
    </main>
</x-layout>
