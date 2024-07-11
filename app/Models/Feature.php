<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function carModels(): BelongsToMany
    {
        return $this->belongsToMany(Car::class, 'car_model_features');
    }
}
