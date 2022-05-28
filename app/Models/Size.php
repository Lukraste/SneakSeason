<?php

namespace App\Models;

use App\Models\Color;
use App\Models\Order;
use App\Enums\SizeType;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function orders(): HasMany
    {
        return $this->belongsToMany(Order::class);
    }

    public function inventories(): HasMany
    {
        return $this->hasMany(Inventory::class);
    }
}

