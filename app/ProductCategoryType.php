<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryType extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function categories()
    {
        return $this->hasMany('App\ProductCategory', 'type_id', 'id');
    }
}
