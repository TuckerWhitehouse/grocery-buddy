<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grocery extends Model
{
    public function location() {
        return $this->belongsTo('App\Location');
    }

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
