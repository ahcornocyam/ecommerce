<?php

namespace ecommerce;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table    = 'Categories';
    protected $fillable =
                            [
                                'id',
                                'name',
                                'description',
                            ];

    /*
     * Relacionando com Products
     */

    public function product(){
        return $this->hasMany('\ecommerce\Product');
    }
}
