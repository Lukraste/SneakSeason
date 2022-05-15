<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Color extends Model
{
    protected $fillable = [
        'name',
        'image'
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'inventory')
        ->withPivot('size_id');
    }

    public function sizes(): BelongsToMany
    {
        return $this->belongsToMany(Size::class, 'inventory')
        ->withPivot('product_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
