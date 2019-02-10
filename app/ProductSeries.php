<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSeries extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App\ProductCategory', 'product_id');
    }

    public function images()
    {
        return $this->hasMany('App\ProductSeriesImage', 'series_id', 'id');
    }

    public function items()
    {
        return $this->hasMany('App\ProductSeriesItem', 'series_id', 'id');
    }
}
