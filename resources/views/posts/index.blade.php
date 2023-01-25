<x-layouts.app
	title="Blog"
	meta-description="Blog meta description"
    >
    <header class="px-6 py-4 space-y-2 text-center">
        <h1 class="my-4 font-serif text-4xl text-center text-red-600 dark:text-red-500">Blog</h1>
        <a class="bg-red-500 text-white inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest focus:border-red-900 focus:shadow-outline-red rounded" href="{{ route('posts.create') }}">Create new post</a>

    </header>


    @foreach($posts as $post)
        <h2>
            <a href="/blog/{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        </h2>
    @endforeach

</x-layouts.app>
