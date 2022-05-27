<?php
namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Color extends Model
{
    protected $fillable = [
        'name',
        'image'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
