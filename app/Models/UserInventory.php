<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInventory extends Model
{
    use HasFactory;

    protected $table = 'user_inventory';

    protected $fillable = [
        'user_id',
        'inventory_id',
        'notifiable'
    ];
}
