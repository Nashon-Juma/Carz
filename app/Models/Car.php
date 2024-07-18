<?php

namespace App\Models;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['model', 'year',];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
