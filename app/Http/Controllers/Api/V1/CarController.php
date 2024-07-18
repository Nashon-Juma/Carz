<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Car;
use App\Http\Requests\Api\V1\StoreCarRequest;
use App\Http\Requests\Api\V1\UpdateCarRequest;
use App\Http\Resources\V1\CarResource;

class CarController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if ($this->include('owner')){
            return CarResource::collection(Car::with('user')->paginate());
        }

        return CarResource::collection(Car::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        if ($this->include('owner')){
            return new CarResource($car->load('user'));
        }

        return new CarResource($car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
