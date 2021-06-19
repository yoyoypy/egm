<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brochure extends Model
{
    protected $table = 'brochures';
    protected $fillable = [
        'products_id',
        'brochure'
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class,'products_id','id');
    }

    public function getBrochureAttribute($value)
    {
        return url('storage/' . $value);
    }
}
