<x-layout>
    <main class="flex flex-col mx-auto gap-4 text-neutral-800 xl:w-1/2 md:w-[75%]">
        <h1 class="lg:text-6xl font-bold text-center">{{$post->title}}</h1>
        <article class="lg:text-lg text-base">
            {{$post->body}}
        </article>
    </main>
</x-layout>
