<?php

namespace ecommerce;

use ecommerce\Http\Repositories\Category\CategoryRepository;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $table   = 'Products';
    protected $fillable =
                            [
                                'id',
                                'name',
                                'description',
                                'price',
                                'featured',
                                'recommend',
                                'category_id',
                            ];



    /*
     * Relacionamento com category
     */

    public function category(){
        return $this->belongsTo('\ecommerce\Category');
    }

    /*
     * Relacionamento com produtimage
     */

    public function productImage(){
        return $this->hasMany('\ecommerce\ProductImage');
    }
}
