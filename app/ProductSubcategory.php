<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubcategory extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App\ProductCategory');
    }

    public function series()
    {
        return $this->hasMany('App\ProductSeries', 'subcategory_id', 'id');
    }
}
