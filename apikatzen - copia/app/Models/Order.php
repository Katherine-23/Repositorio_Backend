<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'clien_numdoc',
        'nomcl',
        'method',
        'total_products',
        'total_price',
        'placed_on',
        'payment_status',
        'tipc',
    ];

    protected $primaryKey = 'idord';
    public $timestamps = false;
}
