@extends('layout.app')

@section('content')

    <div class="overflow-auto d-flex align-content-stretch flex-wrap h-auto">
    @foreach ($movie as $movies)

        <div class="element-list">

            <a href="{{"/".$movies->getScopeName()."/".$movies->id}}">

                <img src="https://image.tmdb.org/t/p/w500{{$movies->poster_path ?? $movies->profile_path}}" class="p-1" alt="Test" height="300px" width="200px">
            </a>

            <div class="w-auto">
                {{$movies->name??""}}
            </div>
        </div>
    @endforeach
            </div>
@endsection
