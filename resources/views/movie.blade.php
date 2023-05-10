@extends('layout.app')

@section('content')

    <div class="overflow-auto d-flex align-content-stretch flex-wrap h-auto">
        <div class="d-inline-flex">
            <img src="https://image.tmdb.org/t/p/w500{{$movie->poster_path ?? $movie->profile_path}}" class="p-1"
                 alt="Test" height="500px">
            <div class="content">
                <h1 class="w-100 text-center">{{$movie->name??""}}</h1>
                <p>Birthday: {{$movie->birthday." / ". $movie->place_of_birth }} </p>
                <p>Deathday: {{$movie->deathday?? "Still not dead"}}</p>
                <p>Wrok: {{$movie->known_for_department?? "Dont know"}}</p>
                <p>Gender {{$movie->gender }}</p>
                <p>Biography: {{$movie->biography?? ""}}</p>
                <p>Adult Actor: {{$movie->adult? "yes" : "no"}}</p>
            </div>
        </div>
    </div>
@endsection
