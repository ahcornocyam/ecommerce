<?php

namespace ecommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =
                            [
                                'id',
                                'name',
                                'price',
                                'featured',
                                'recommend',
                                'category_id',
                            ];
}
