@extends('layouts.main')

@section('content')

<div class="my-4">
    <h2 class="font-sans font-semibold text-3xl my-3">Edit artist</h2>
</div>

<form action="{{ route('artists.update', $artist->id) }}" method="post">
    @csrf
    @method('PUT')

    <div>
        <strong class="my-4">Artist:</strong>
        <input type="text" name="name" value="{{ $artist->name }}" placeholder="Enter Artist" class="contrast-more:border-slate-400 contrast-more:placeholder-slate-500 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-black-500" id="inline-full-name">
    </div>
    <div class="my-3">
        <strong>Songs:</strong>
        <input type="number" name="songs" value="{{ $artist->songs }}" placeholder="Enter Songs" class="contrast-more:border-slate-400 contrast-more:placeholder-slate-500 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-black-500" id="inline-full-name">
    </div>
    <div class="my-3">
        <strong>Genres:</strong>
        <input type="text" name="genres" value="{{ $artist->genres }}" placeholder="Enter Genres" class="contrast-more:border-slate-400 contrast-more:placeholder-slate-500 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-black-500" id="inline-full-name">
    </div>
    <div class="my-3">
        <strong>Popularity:</strong>
        <input type="number" step=any name="popularity" value="{{ $artist->popularity }}" placeholder="Enter Popularity" class="contrast-more:border-slate-400 contrast-more:placeholder-slate-500 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-black-500" id="inline-full-name">
    </div>
    <div class="my-3">
        <strong>Link:</strong>
        <input type="text" name="link" value="{{ $artist->link }}" placeholder="Enter Popularity" class="contrast-more:border-slate-400 contrast-more:placeholder-slate-500 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-black-500" id="inline-full-name">
    </div>
    <div class="col-md-12">
        <button type="submit" class="contrast-more:border-slate-400 contrast-more:placeholder-slate-500 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Save changes</button>
        <a href="{{ route('artists.index') }}" class="backbtn">Go Back</a>
    </div>
</form>

@endsection