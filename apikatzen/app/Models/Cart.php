<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'idv';
    protected $fillable = [
        'user_id',
        'idprod',
        'name',
        'price',
        'quantity',
    ];
}
