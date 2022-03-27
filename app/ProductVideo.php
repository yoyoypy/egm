<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVideo extends Model
{
    protected $table = 'product_videos';
    protected $fillable = [
        'product_id',
        'video'
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function getVideoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
