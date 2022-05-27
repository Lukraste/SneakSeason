<?php

namespace App\Models;

use App\Models\Modele;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Brand extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function modeles(): HasMany
    {
        return $this->hasMany(Modele::class);
    }
}
