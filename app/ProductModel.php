<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function item()
    {
        return $this->belongsTo('App\ProductItem', 'item_id');
    }
}
