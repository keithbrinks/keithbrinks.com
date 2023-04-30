<x-app-layout title="Balancer" navParent="balancer">

    <ul>
        @foreach ($sheets as $sheet)
            <li><a href="{{ route('balancer-sheets.show', $sheet->id) }}">{{ $sheet->name }}</a></li>
        @endforeach
    </ul>

</x-app-layout>