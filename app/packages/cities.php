<?php

namespace App\packages;

use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    protected $fillable = [
        'name', 'del_status'
    ];

    public function packages(){
        return $this->hasMany(packages::class,'city_id');
    }
}
