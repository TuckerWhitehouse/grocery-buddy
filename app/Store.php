<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function locations() {
        return $this->hasMany('App\Location');
    }

    public function groceries() {
        return $this->hasManyThrough('App\Grocery', 'App\Location');
    }
}
