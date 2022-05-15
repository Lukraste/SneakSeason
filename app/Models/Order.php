<?php

namespace App\Models;

use App\Models\User;
use App\Models\Inventory;
use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'color_size_product_id',
        'quantity',
        'status',
        'date',
        'total_price_vat'
    ];

    protected $casts = [
        'status' => OrderStatus::class
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function inventory(): BelongsTo
    {
        return $this->belongsTo(Inventory::class);
    }
}
