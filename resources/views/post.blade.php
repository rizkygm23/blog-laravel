<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    
        <article class="py-8 max-w-screen-md border-b border-grey-200">
            <h1 class="mb-1 text-3xl tracking-tight text-gray-900 font-bold">{{ $post['title'] }}</h1>
            <div class="text-base text-grey-500 ">
                <a href="#"> {{ $post->author->name }}</a> | {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">
                {{$post['body']}}
            </p>
            <a class="font-medium text-blue-600 hover:underline" href="/posts"> &laquo; Back to posts</a>
        </article>

</x-layout>
