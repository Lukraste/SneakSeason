<?php

namespace App\Models;

use App\Models\Collection;
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

    public function collections(): HasMany
    {
        return $this->hasMany(Collection::class);
    }
}
