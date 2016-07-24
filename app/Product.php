<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function groceries() {
        return $this->hasMany('App\Grocery');
    }
}
