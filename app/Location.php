<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function store() {
        return $this->belongsTo('App\Store');
    }

    public function groceries() {
        return $this->hasMany('App\Grocery');
    }
}
