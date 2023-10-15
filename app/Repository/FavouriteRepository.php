<?php

namespace App\Repository;

use App\Models\Favourite;

class FavouriteRepository
{
    public function getById($id)
    {
        return Favourite::findOrFail($id);
    }

    public function getAll()
    {
        return Favourite::all();
    }

    public function create($data)
    {
        return Favourite::create($data);
    }

    public function update($id, $data)
    {
        $inventory = Favourite::findOrFail($id);
        $inventory->update($data);
        return $inventory;
    }

    public function delete($id)
    {
        $inventory = Favourite::findOrFail($id);
        $inventory->delete();
    }
}
