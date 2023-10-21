<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sidebars · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->

    <link href="{{ asset('css/content.css') }}" rel="stylesheet">
</head>
<body>

<main>

    <div class="b-example-divider"></div>

    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Movie World</span>
        </a>
        <hr>

        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/" class="nav-link link-dark" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                    Home
                </a>
            </li>
            <li>
                <a href="/" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                    Movie
                </a>
            </li>
            <li>
                <a href="/serie" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                    Series
                </a>
            </li>
            <li>
                <a href="/person" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                    Actors
                </a>
            </li>

        </ul>
        <hr>
        <div class="dropdown">
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Sign out</button>
            </form>

        </div>
    </div>

    <div class="b-example-divider"></div>

    @yield('content')
</main>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="sidebars.js"></script>
</body>
</html>
