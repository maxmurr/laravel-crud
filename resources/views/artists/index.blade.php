@extends('layouts.main')

@section('content')

<div class="bg-white dark:bg-slate-900 dark:text-white">
    <div class="row my-4">
        <div class="md-12 flex items-center justify-between">
            <a href="{{ route('artists.index') }} " class="font-sans font-semibold text-3xl my-3">Artist list</a>
            <div class="flex items-center">
                <a href="{{ route('artists.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-green-700 rounded mr-5">Add artist</a>
                <div id="theme-container" class="relative w-14 h-7 bg-slate-800 rounded-3xl cursor-pointer" onclick="toggleThemeSwitcher(false)">
                    <div id="theme-switch" class="absolute w-6 h-6 bg-white rounded-full top-1/2 transform translate-y-50 flex items-center justify-center transition-all duration-300"></div>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        {{ $message }}
    </div>
    @endif


    <div class="mt-4">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-900 dark:text-white">
                <tr>
                    <th class="py-3 px-6">Name</th>
                    <th class="py-3 px-6">Songs</th>
                    <th class="py-3 px-6">Genres</th>
                    <th class="py-3 px-6">Popularity</th>
                </tr>
            </thead>

            <tbody class="my-3">

                @foreach ($artists as $artist)
                <tr class="bg-white border-t dark:bg-slate-900 dark:text-white">
                    <td>
                        <a href="{{ route('artists.show', $artist->id) }}" class="py-4 px-6 hover:text-sky-400">{{ $artist->name }}</a>
                    </td>
                    <td class="py-4 px-6">{{ $artist->songs }}</td>
                    <td class="py-4 px-6">{{ $artist->genres }}</td>
                    <td class="py-4 px-6">{{ $artist->popularity }}</td>
                    <td>
                        <form action="{{ route('artists.destroy', $artist->id) }}" method="post">
                            <a href="{{ route('artists.edit', $artist->id) }}" class="bg-stone-500 hover:bg-stone-700 text-white font-bold py-2 px-4 border border-stone-700 rounded">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">Delete</button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function toggleThemeSwitcher(isFirstReload) {
        let theme = localStorage.getItem('theme');
        if (isFirstReload) {
            theme = theme === 'dark' ? 'light' : 'dark';
        }

        let icon;
        if (theme === 'dark') {
            document.documentElement.classList.remove('dark')
            localStorage.setItem('theme', 'light');

            document.getElementById('theme-switch').style.left = '0.125rem';
            document.getElementById('theme-switch').style.backgroundColor = '#fff';
            document.getElementById('theme-container').style.backgroundColor = 'rgb(30 41 59)';
            icon = themeIcon(false);
        } else {
            document.documentElement.classList.add('dark')
            localStorage.setItem('theme', 'dark');

            document.getElementById('theme-switch').style.left = '1.75rem';
            document.getElementById('theme-switch').style.backgroundColor = 'rgb(30 41 59)';
            document.getElementById('theme-container').style.backgroundColor = '#fff';
            icon = themeIcon(true);
        }
        document.getElementById('theme-switch').innerHTML = icon;
    }

    function themeIcon(isDark) {
        if (isDark) {
            return `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#ffffff">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                </svg>
            `;
        } else {
            return `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
                </svg>
            `;
        }
    }

    toggleThemeSwitcher(true);
</script>


{{-- if you want to customize the pagination view: https://laravel.com/docs/9.x/pagination#customizing-the-pagination-view--}}
{{ $artists->links() }}


@endsection