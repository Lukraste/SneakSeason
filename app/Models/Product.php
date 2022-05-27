<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Image;
use App\Models\Modele;

use App\Models\Category;
use App\Enums\ProductStock;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{  
    protected $fillable = [
        'model',
        'name',
        'slug',
        'price_vat',
        'be_vat',
        'product_code',
        'gender',
        'stock',
        'discount',
        'description',
        'brand_id',
        'color_id',
        'modele_id'
    ];
    
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function modele(): BelongsTo
    {
        return $this->belongsTo(Modele::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
    
    public function sizes(): BelongsToMany
    {
        return $this->belongsToMany(Size::class, 'inventory')
        ->withPivot('quantity');
    }

    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }
}
