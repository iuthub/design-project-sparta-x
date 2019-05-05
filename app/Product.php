<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'category_id'];

    public static function add($fields)
    {

        $product=new static;
        $product->fill($fields);
        $product->save();
        return $product;
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function images()
    {
        return $this->hasMany(ProductImages::class);
    }
    public function edit($fields)
    {
        $this->fill($fields);

    }


}
