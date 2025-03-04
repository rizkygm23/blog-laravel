<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-grey-200">
            <h1 class="mb-1 text-3xl tracking-tight text-gray-900 font-bold">{{ $post['title'] }}</h1>
            <div class="text-base text-grey-500 ">
                <a href="#"> {{ $post['author'] }}</a> | 12 Januari 2022
            </div>
            <p class="my-4 font-light">
                {{Str::Limit($post['body'], 50)}}
            </p>
            <a class="font-medium text-blue-600 hover:underline" href="/post/{{ $post['slug'] }}">Read More &raquo;</a>
        </article>
    @endforeach
</x-layout>
