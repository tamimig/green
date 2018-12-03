<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardgenerate extends Model
{
    protected $fillable = [
        'amount', 'merchant_id', 'reference'
    ];
}
