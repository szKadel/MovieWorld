@extends('layout.app')

@section('content')

    <div class="overflow-auto d-flex align-content-stretch flex-wrap h-auto">
        <div class="d-inline-flex">
            <img src="https://image.tmdb.org/t/p/w500{{$person->poster_path ?? $person->profile_path}}" class="p-1"
                 alt="Test" height="500px">
            <div class="content">
                <h1 class="w-100 text-center">{{$person->name??""}}</h1>
                <p>Birthday: {{$person->birthday." / ". $person->place_of_birth }} </p>
                <p>Deathday: {{$person->deathday?? "Still not dead"}}</p>
                <p>Wrok: {{$person->known_for_department?? "Dont know"}}</p>
                <p>Gender {{$person->gender }}</p>
                <p>Biography: {{$person->biography?? ""}}</p>
                <p>Adult Actor: {{$person->adult? "yes" : "no"}}</p>
            </div>
        </div>
    </div>
@endsection
