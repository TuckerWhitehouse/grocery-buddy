<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function shopping_list() {
        return $this->belongsTo('App\ShoppingList');
    }

    public function grocery() {
        return $this->belongsTo('App\Grocery');
    }
}
