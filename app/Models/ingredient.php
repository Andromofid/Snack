<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'titre',
        'photo',
        'salad_id'
    ];

    // Define relationship: An ingredient belongs to a salad
    public function salad()
    {
        return $this->belongsTo(Salad::class);
    }
}
