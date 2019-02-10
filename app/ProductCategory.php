<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function series()
    {
        return $this->hasMany('App\ProductSeries', 'category_id', 'id');
    }
}
