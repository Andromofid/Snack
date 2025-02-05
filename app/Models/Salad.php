<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salad extends Model
{
    protected $fillable = [
        'titre',
        'prix',
        'photo',
    ];
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }
}
