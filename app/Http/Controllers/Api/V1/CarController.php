<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Car;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreCarRequest;
use App\Http\Requests\Api\V1\UpdateCarRequest;
use App\Http\Resources\V1\CarResource;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if 
        $cars = Car::paginate(10);
        return CarResource::collection($cars);
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
    public function show($id)
    {
        $car = Car::findOrFail($id);
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
