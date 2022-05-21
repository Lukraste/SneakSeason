<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Brand;
use App\Models\Image;
use App\Models\Category;
use App\Enums\ProductStock;
use App\Enums\ProductGender;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{  
    protected $fillable = [
        'name',
        'slug',
        'price_vat',
        'be_vat',
        'gender',
        'stock',
        'description',
        'discount',
        'brand_id'
    ];

    protected $casts = [
        'gender' => ProductGender::class,
        'stock' => ProductStock::class
    ];
    
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
    
    public function sizes(): BelongsToMany
    {
        return $this->belongsToMany(Size::class, 'inventory')
        ->withPivot('color_id');
    }

    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class, 'inventory')
        ->withPivot('size_id');
    }
}
