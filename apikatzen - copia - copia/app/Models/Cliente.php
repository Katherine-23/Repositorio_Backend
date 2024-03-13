<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'idusu',
        'tipd',
        'nudoc',
        'nocl',
        'telfcl',
        'state',
    ];

    protected $primaryKey = 'nudoc';
    public $incrementing = false;
    protected $keyType = 'char';
}
