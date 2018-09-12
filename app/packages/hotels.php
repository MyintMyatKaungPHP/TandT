<?php

namespace App\packages;

use App\booking\bookings;
use Illuminate\Database\Eloquent\Model;

class hotels extends Model
{
    protected $fillable = [
        'name', 'del_status', 'place', 'link', 'price'
    ];
    public function bookings(){
        return $this->hasMany(bookings::class,'hotel_id');
    }
}
