<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'slug',
        'product_name',
        'product_description',
        'category_id',
        'position'
    ];

        /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the user that owns the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * Get all of the Galleries for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Galleries()
    {
        return $this->hasMany(Gallery::class, 'products_id');
    }

    /**
     * Get all of the Brochures for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Brochures()
    {
        return $this->hasMany(Brochure::class, 'products_id');
    }

    /**
     * Get all of the video for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Video()
    {
        return $this->hasMany(ProductVideo::class, 'product_id', 'id');
    }
}
