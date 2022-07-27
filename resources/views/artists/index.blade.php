@extends('layouts.main')

@section('content')
    <h1 class="text-3xl mt-4">Artists List</h1>
    <div class="mt-4">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th class="py-3 px-6">Name</th>
                <th class="py-3 px-6">Songs</th>
                <th class="py-3 px-6">Popularity</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($artists as $artist)
                <tr class="bg-white border-t">
                    <td class="py-4 px-6">{{ $artist->name }}</td>
                    <td class="py-4 px-6">{{ $artist->songs }}</td>
                    <td class="py-4 px-6">{{ $artist->popularity }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{-- if you want to customize the pagination view: https://laravel.com/docs/9.x/pagination#customizing-the-pagination-view--}}
    {{ $artists->links() }}


@endsection
