<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'slug',
        'category'
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

    // /**
    //  * Get the user that owns the Job
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\hasMany
    //  */
    // public function ProductList()
    // {
    //     return $this->hasMany(Application::class, 'product_id');
    // }
}
