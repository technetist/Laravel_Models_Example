<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;
use App\Models\Fruit;

class Monkey extends Model
{
    protected $fillable = array('name', 'type', 'happiness_level');

    public function fruit() {
        return $this->hasOne('App\Models\Fruit');
    }

    public function trees() {
        return $this->hasMany('App\Models\Tree');
    }

    public function hotels() {
        return $this->belongsToMany('App\Models\Hotel', 'monkeys_hotels', 'monkey_id', 'hotel_id');
    }
}
