<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Http\Requests\StoreActorRequest;
use App\Http\Requests\UpdateActorRequest;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $id)
    {

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
    public function store(StoreActorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor, int $id)
    {
        $result = new \App\Services\ImdbService;
        $data = $result ->call("/person/$id",[]);

        $class = new \App\Models\Actor();
        $class->fill($data);

        return view('person',['person'=> $class]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActorRequest $request, Actor $actor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
        //
    }
}
