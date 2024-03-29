<x-layout>
    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    @foreach ($blogs as $blog)
        <div class={{ $loop->odd ? 'bg-gray' : '' }}> {{-- special variable-$loop --}}
            <h1><a href="blogs/{{ $blog->slug }}">{{ $blog->title }} </a></h1>
            <div>
                <p> published at -{{ $blog->date }} </p>
                <p>
                    {{ $blog->intro }}
                </p>
            </div>
        </div>
    @endforeach

</x-layout>
