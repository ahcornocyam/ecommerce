<?php

namespace ecommerce;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //
    protected $table        = 'productimages';
    protected $fillable     =
                                [
                                    'id',
                                    'product_id',
                                    'extension'
                                ];

    /*
     * Relacionamento com Product
     */
    public function product(){
        return $this->belongsTo('\ecommerce\Product');
    }
}
