<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    protected $fillable = array('type', 'height', 'monkey_id');

    public function monkeys() {
        return $this->belongsTo('App\Models\Monkey');
    }
}
