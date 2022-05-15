<?php

namespace App\Models;

use App\Models\Order;
use App\Enums\UserGender;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'role',
        'max_orders',
        'lastname',
        'firstname',
        'birthdate',
        'gender',
        'phone_number',
        'rgpd',
        'newsletters',
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $casts = [
        'gender' => UserGender::class
    ];
    
    public function orders() : HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function inventories(): BelongsToMany
    {
        return $this->belongsToMany(Inventory::class)
        ->withPivot('notifiable');
    }
}
