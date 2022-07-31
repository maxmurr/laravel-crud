@extends('layouts.main')

@section('content')

<div class="my-4">
    <h2 class="font-sans font-semibold text-3xl my-3">Add new artist</h2>
</div>

@if ($errors->any())
<div class="my-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <strong>Whoops!</strong>
    There were some problems with your input. <br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('artists.store') }}" method="post">
    @csrf

    <div>
        <strong class="my-4">Artist:</strong>
        <input type="text" name="name" placeholder="Enter Artist" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-black-500" id="inline-full-name">
    </div>
    <div class="my-3">
        <strong>Songs:</strong>
        <input type="number" name="songs" placeholder="Enter Songs" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-black-500" id="inline-full-name">
    </div>
    <div class="my-3">
        <strong>Genres:</strong>
        <input type="text" name="genres" placeholder="Enter Genres" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-black-500" id="inline-full-name">
    </div>
    <div class="my-3">
        <strong>Popularity:</strong>
        <input type="number" step=any name="popularity" placeholder="Enter Popularity" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-black-500" id="inline-full-name">
    </div>
    <div class="my-3">
        <strong>Link:</strong>
        <input type="text" name="link" placeholder="Enter Popularity" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-black-500" id="inline-full-name">
    </div>
    <div class="col-md-12">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Create</button>
        <a href="{{ route('artists.index') }}" class="backbtn">Go Back</a>
    </div>
</form>






@endsection