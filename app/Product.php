<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function categories()
    {
        return $this->belongsTo('App\Category', 'id_categories');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'products_tags', 'id_products', 'id_tags');
    }

}
