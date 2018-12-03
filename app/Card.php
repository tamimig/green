<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'card_holder_name', 'card_number', 'expiry_month', 'expiry_year', 'cvv'
    ];
}
