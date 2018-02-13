<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    protected $fillable = array('amount', 'monkey_id');

    protected $table = 'fruit';

    public function monkeys() {
        return $this->belongsTo('App\Models\Monkey');
    }
}
