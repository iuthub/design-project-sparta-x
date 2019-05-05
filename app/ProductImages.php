<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class ProductImages extends Model
{
    protected $fillable = ['product_id', 'title', 'alt'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function removeImage()
    {
        if($this->title!=null)
        {

            Storage::delete($this->title);
        }
    }

    public function uploadImage($image)
    {
        if($image==null){ return;}
        $this->removeImage();
        $filename = $image->store('images');
        return $filename;
    }

}
