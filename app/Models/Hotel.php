<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = array('name', 'rating');

    public function monkeys() {
        return $this->belongsToMany('App\Models\Monkey', 'monkeys_hotels', 'hotel_id', 'monkey_id');
    }
}
