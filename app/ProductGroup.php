<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function series()
    {
        return $this->belongsToMany('App\ProductSeries', 'product_groups__product_series', 'product_series_id', 'product_group_id');
    }
}
