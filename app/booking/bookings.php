<?php

namespace App\booking;

use App\packages\hotels;
use App\packages\packages;
use App\packages\routes;
use App\user\users;
use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    protected $fillable = [
        'user_id', 'package_id', 'hotel_id', 'route_id', 'departure_date', 'qty', 'total_price', 'confirm_price', 'user_msg','admin_msg','status'
    ];
    public function hotels(){
        return $this->belongsTo(hotels::class,'hotel_id');
    }
    public function routes(){
        return $this->belongsTo(routes::class,'route_id');
    }
    public function users(){
        return $this->belongsTo(users::class,'user_id');
    }
    public function packages(){
        return $this->belongsTo(packages::class,'package_id');
    }
}
