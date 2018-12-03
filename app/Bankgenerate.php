<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bankgenerate extends Model
{
    protected $fillable = [
        'amount', 'merchant_id', 'reference'
    ];
}
