<?php

namespace App\Models;

use App\Models\Color;
use App\Enums\SizeType;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Size extends Model
{
    protected $fillable = [
        'size',
        'type'
    ];

    protected $casts = [
        'type' => SizeType::class
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'inventory')
        ->withPivot('color_id');
    }
}
