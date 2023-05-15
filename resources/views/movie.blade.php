@extends('layout.app')

@section('content')

    <div class="overflow-auto d-flex align-content-stretch flex-wrap h-auto position-relative">
        <img src="https://image.tmdb.org/t/p/original/{{$movie->backdrop_path ?? $movie->backdrop_path}}" height="500px" class="movie_back_img">
        <div class="position-absolute top-0 left-0 w-auto modal-backdrop">

        </div>
        <div class="d-inline-flex" id="movie-content">
            <img src="https://image.tmdb.org/t/p/w500{{$movie->poster_path ?? $movie->profile_path}}" id="movie-poster" class="p-1"
                 alt="Test" height="500px">
            <div class="content">

                <h1 class="w-100 text-center">{{$movie->original_title??""}}</h1>
                <p>budget: {{$movie->budget?? "Still not dead"}}</p>
                <p>Wrok: {{$movie->known_for_department?? "Dont know"}}</p>
                <p>original_language {{$movie->original_language }}</p>
                <p>Overview: {{$movie->overview?? ""}}</p>
            </div>
        </div>

        <div class="movie-company">
            @foreach($movie->production_companies as $movieCompany)
                @if (@getimagesize("https://image.tmdb.org/t/p/w500/".$movieCompany['logo_path']))
                    <img src="https://image.tmdb.org/t/p/w500/{{$movieCompany["logo_path"]}}"
                         alt="" width="150px" height="60px">
                @endif

            @endforeach
        </div>

    </div>
@endsection
