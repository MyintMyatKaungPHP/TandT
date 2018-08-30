<?php

namespace App\packages;

use Illuminate\Database\Eloquent\Model;


class packages extends Model
{
    protected $fillable = [
        'title', 'del_status', 'city_id', 'price', 'description', 'itinerary', 'geo_location', 'duration', 'images'
    ];
    public function cities(){
        return $this->belongsTo(cities::class,'city_id');
    }
}
