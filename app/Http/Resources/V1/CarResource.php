<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => 'cars',
            'id' => (string) $this->id,
            'attributes' => [
                'img' => $this->img,
                'make' => $this->make,
                'model' => $this->model,
                'milage' => $this->milage,
                'transmission' => $this->transmission,
                'seats' => $this->seats,
                'luggage' => $this->luggage,
                'fuel' => $this->fuel,
                'category' => $this->category,

                'description' => $this->when(
                    $request->routeIs('cars.show'),$this->description
                ),
                'year' => $this->year,
                'color' => $this->color,
                'rated' => $this->rated,
                'leasing' => $this->leasing,
                'price_per_hour' => $this->price_per_hour
            ],
            'links' => [
                'self' => route('cars.show', ['car' => $this->id]),
            ],
            'relationships' => [
                'owner' => [
                    'data' => [
                        'type' => 'user',
                        'id' => (string) $this->user_id,
                        'name' => $this->user->name,
                    ],
                    'links' => [
                        'self' => 'TODO',       //TODO
                    ],
                ],
            ],
        ];
    }
}
