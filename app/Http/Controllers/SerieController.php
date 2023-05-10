<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Serie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = new \App\Services\ImdbService;
        $data = $result ->call("/serie/popular",[]);

        $result = [];

        foreach ($data["results"] as $movie) {
            $class = new Serie();
            $result[] = $class->fill($movie);
        }

        return view('list',['serie'=> $result]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Serie $movie, int $id)
    {
        $result = new \App\Services\ImdbService;
        $data = $result ->call("/tv/".$id,[]);
        $class = (new Serie())->fill($data);

        return view('serie',['serie'=> $class]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Serie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Serie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Serie $movie)
    {
        //
    }
}
