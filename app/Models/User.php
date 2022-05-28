<?php

namespace App\Models;

use App\Models\Order;
use App\Enums\UserGender;
use App\Models\UserProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;   

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'password',
        'role',
        'max_orders',
        'lastname',
        'firstname',
        'rgpd',
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
       
    public function orders() : HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function products() : BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'user_product');
    }

}
