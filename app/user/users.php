<?php

namespace App\user;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class users extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address','image'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
