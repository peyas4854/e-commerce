<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{
    protected $fillable = [
        'product_id',  'image',
    ];
}
