<a class="block p-2 font-semibold {{ $currentPage ? ' bg-sky-600 text-white rounded hover:bg-sky-700' : 'hover:text-sky-600'}}" href="{{ $href }}">
    <i class="{{ $icon }} fa-fw"></i>
    {{ $slot }}
</a>