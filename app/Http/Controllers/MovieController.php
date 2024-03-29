<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Repository\FavouriteRepository;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{

    public function __construct(private FavouriteRepository $favouriteRepository)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = new \App\Services\ImdbService;
        $data = $result ->call("/movie/popular",[]);

        $result = [];

        foreach ($data["results"] as $movie) {

            $class = new Movie();
            $result[] = $class->fill($movie);

            //$class->saveOrFail();
        }

        $favourite = $this->favouriteRepository->getAll();

        return view('homepage',['movie'=> $result, 'favourite' => $favourite]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie, int $id)
    {
        $result = new \App\Services\ImdbService;
        $data = $result ->call("/movie/$id",[]);

        $class = new Movie();
        $class->fill($data);


        return view('movie',['movie'=> $class]);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
