<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function series()
    {
        return $this->belongsTo('App\ProductSeries', 'series_id');
    }

    public function group()
    {
        return $this->belongsTo('App\ProductGroup', 'group_id');
    }

    public function models()
    {
        return $this->hasMany('App\ProductModel', 'item_id', 'id');
    }
}
