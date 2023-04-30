<x-app-layout title="Links" navParent="links">

    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        <ul>
            @foreach ($category->links as $link)
                <li>
                    <a class="flex block align-middle hover:bg-gray-200 p-1 rounded" href="{{ $link->url }}">
                        {{-- <img src="{{ $link->getFavicon() }}" class="w-6 mr-1"> --}}
                        {{ $link->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endforeach

</x-app-layout>