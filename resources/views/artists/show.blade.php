@extends('layouts.main')


@section('content')

<div class="my-4">
    <h2 class="font-sans font-semibold text-3xl my-3">Artist infomation</h2>
</div>

<div class="my-4 max-w-sm rounded overflow-hidden shadow-lg bg-white text-gray-700">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $artist->name }}</div>
        <p class="text-gray-700 text-base">{{ $artist->link }}</p>
        <div>
            <button onclick="copyArtistLink();" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 my-3 border border-green-700 rounded">
                <svg class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                </svg>
                <span id="copy-text">Copy link</span>
            </button>
        </div>
        <button>
            <i class="fa-solid fa-heart text-red-500"></i>
        </button>
    </div>
    <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Songs: {{ $artist->songs}}</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Genres: {{ $artist->genres}}</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Popurality: {{ $artist->popularity}}</span>
    </div>
</div>

<a href="{{ route('artists.index') }}" class="backbtn">Go Back</a>

<script>
    function copyArtistLink() {
        var src = <?php echo (json_encode($artist->link)); ?>;
        navigator.clipboard.writeText(src);
        document.getElementById('copy-text').innerText = 'Copied';
        setTimeout(() => {
            document.getElementById('copy-text').innerText = 'Copy link';
        }, 3000)
    }
</script>

@endsection