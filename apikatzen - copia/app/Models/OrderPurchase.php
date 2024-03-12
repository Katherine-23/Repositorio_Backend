<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'idprov',
        'method',
        'total_products',
        'total_price',
        'placed_on',
        'payment_status',
        'tipc',
    ];

    protected $primaryKey = 'idordpur';
    public $timestamps = false;
}
