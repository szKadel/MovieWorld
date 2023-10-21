<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Http\Requests\StoreFavouriteRequest;
use App\Http\Requests\UpdateFavouriteRequest;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;


class FavouriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Auth $auth)
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

        return view('list',['movie'=> $result, 'favourite' => $favourite]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(int $id)
    {
        $user = new Favourite();
        $user->movie_id= $id;
        $user->my_rate = 8.0;
        $user->watch_list = true;
        $user->favourtie = true;
        $user->watched = true;
        $user->save();

        var_dump($user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFavouriteRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Favourite $favourite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favourite $favourite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavouriteRequest $request, Favourite $favourite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favourite $favourite)
    {
        //
    }
}
