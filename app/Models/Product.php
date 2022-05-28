<?php

namespace App\Models;

use App\Models\Size;
use App\Models\User;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Image;

use App\Models\Order;
use App\Models\Category;

use App\Models\Inventory;
use App\Models\Collection;
use App\Enums\ProductStock;
use App\Models\UserProduct;
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
        'collection_id'
    ];
    
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class);
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

    public function inventories(): HasMany
    {
        return $this->HasMany(Inventory::class);
    }

    public function orders(): HasMany
    {
        return $this->HasMany(Order::class);
    }
    
    public function user_products() : HasMany
    {
        return $this->hasMany(UserProduct::class);
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_product');
    }
}
