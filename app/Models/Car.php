<?php

namespace App\Models;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['model', 'year', 'features'];

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class, 'car_model_features');
    }
}
