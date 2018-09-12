<?php

namespace App\packages;

use App\booking\bookings;
use Illuminate\Database\Eloquent\Model;

class routes extends Model
{
    protected $fillable = [
        'name', 'del_status', 'from_city', 'to_city', 'type', 'price'
    ];
    public function bookings(){
        return $this->hasMany(bookings::class,'route_id');
    }
}