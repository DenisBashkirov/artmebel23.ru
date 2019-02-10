<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSeriesImage extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function series()
    {
        return $this->belongsTo('App\ProductSeries', 'series_id');
    }
}
