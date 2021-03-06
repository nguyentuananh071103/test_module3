<?php

namespace App\Repositories;

use App\Models\Hotel;

class HotelRepository
{
    public function getAll()
    {
        $hotels = Hotel::all();
        return $hotels;
    }

    public function create($request)
    {
        $data = $request->only('group','name','sex','phone','cccd','email','address');
        $hotel = Hotel::query()->create($data);
        return $hotel;
    }

    public function store($request)
    {
        $data = $request->only('name','request');
        Hotel::query()->create();
        return $data;
    }

    public function getById($id)
    {
        $hotel = Hotel::findOrFail($id);
        return $hotel;
    }

    public function update($request, $id)
    {
        Hotel::query()->findOrFail($id);
        $data = $request->only('group','name','sex','phone','cccd','email','address');
        return Hotel::query()->where('id', '=', $id)->update($data);
    }

    public function delete($id)
    {
        $hotel = Hotel::query()->findOrFail($id);
        $hotel->delete();
    }
}
