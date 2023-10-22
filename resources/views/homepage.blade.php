<link href="{{ asset('css/slider/slider.css') }}" rel="stylesheet">
@extends('layout.app')

@section('content')
            <div class="row">
                <div class="header">
                    <div class="progress-bar"></div>
                </div>
                <H5>Najpopularniejsze filmy</H5>
                <div class="container">
                    <button class="handle left-handle">
                        <div class="text">&#8249;</div>
                    </button>
                    <div class="slider">
                        @foreach ($movie as $movies)

                                <img src="https://image.tmdb.org/t/p/w500{{$movies->poster_path ?? $movies->profile_path}}" class="p-1" alt="Test" height="300px" width="200px">
                        @endforeach
                    </div>
                    <button class="handle right-handle">
                        <div class="text">&#8250;</div>
                    </button>
                </div>
                <H5>Ulubione filmy</H5>
                <div class="container">
                    <button class="handle left-handle">
                        <div class="text">&#8249;</div>
                    </button>
                    <div class="slider">
                        @foreach ($movie as $movies)

                            <img src="https://image.tmdb.org/t/p/w500{{$movies->poster_path ?? $movies->profile_path}}" class="p-1" alt="Test" height="300px" width="200px">
                        @endforeach
                    </div>
                    <button class="handle right-handle">
                        <div class="text">&#8250;</div>
                    </button>
                </div>

            </div>


            <script src="{{asset("js/slider.js")}}"></script>
@endsection
