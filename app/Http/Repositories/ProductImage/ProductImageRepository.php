<?php

namespace ecommerce\Http\Repositories\ProductImage;
use ecommerce\ProductImage;

/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 30/07/15
 * Time: 16:48
 */
class ProductImageRepository
{
    private $model;

    /**
     * ProductImageRepository constructor.
     */
    public function __construct(ProductImage $repository)
    {
        $this->model    = $repository;
    }




}