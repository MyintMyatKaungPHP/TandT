<?php

namespace App\packages;

use Illuminate\Database\Eloquent\Model;

class hotels extends Model
{
    protected $fillable = [
        'name', 'del_status', 'place', 'link', 'price'
    ];
}
