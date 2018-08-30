<?php

namespace App\packages;

use Illuminate\Database\Eloquent\Model;

class routes extends Model
{
    protected $fillable = [
        'name', 'del_status', 'from', 'to', 'type', 'price'
    ];
}