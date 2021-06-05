<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    protected $fillable = [
        'products_id',
        'photo'
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class,'products_id','id');
    }

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
