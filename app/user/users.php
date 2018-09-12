<?php

namespace App\user;

use App\booking\bookings;
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

    public function bookings(){
        return $this->hasMany(bookings::class,'user_id');
    }
}
