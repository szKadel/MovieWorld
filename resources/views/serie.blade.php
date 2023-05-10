@extends('layout.app')

@section('content')

    <div class="overflow-auto d-flex align-content-stretch flex-wrap h-auto">
        <div class="d-inline-flex">

            <img src="https://image.tmdb.org/t/p/w500{{$serie->poster_path ?? $serie->profile_path}}" class="p-1"
                 alt="Test" height="500px">
            <div class="content">
                <h1 class="w-100 text-center">{{$serie->name??""}}</h1>
                <p>Birthday: {{$serie->birthday." / ". $serie->place_of_birth }} </p>
                <p>Deathday: {{$serie->deathday?? "Still not dead"}}</p>
                <p>Wrok: {{$serie->known_for_department?? "Dont know"}}</p>
                <p>Gender {{$serie->gender }}</p>
                <p>Biography: {{$serie->biography?? ""}}</p>
                <p>Adult Actor: {{$serie->adult? "yes" : "no"}}</p>
            </div>
        </div>
    </div>
@endsection
