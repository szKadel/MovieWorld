@extends('layout.app')

@section('content')


    <div class="overflow-auto d-flex align-content-stretch flex-wrap h-auto">
    @foreach ($movie as $movies)

        <img src="https://image.tmdb.org/t/p/w500{{$movies->poster_path}}" class="p-1" alt="Test" height="500px">

    @endforeach
            </div>
@endsection
