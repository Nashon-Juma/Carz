<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     * @param Request $request
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'type' => 'users',
            'id' => (string) $this->id,
            'attributes' => [
                'name' => $this->name,
                'email' => $this->email,

                $this->mergeWhen($request->routeIs('users.*'), [
                    'email_verified_at' => $this->email_verified_at ? $this->email_verified_at->toIso8601String() : null,
                    'created_at' => $this->created_at->toIso8601String(),
                    'updated_at' => $this->updated_at->toIso8601String(),
                ]),
            ],
            'includes'=>
                new CarResource($this->whenLoaded('car'))
            ,
            'links' => [
                'self' => route('users.show', ['user' => $this->id]),
            ],
        ];
    }
}
