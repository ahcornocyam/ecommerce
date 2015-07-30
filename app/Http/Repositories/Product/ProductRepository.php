<?php

namespace ecommerce\Http\Repositories\Product;
use ecommerce\Product;

class ProductRepository
{

    /**
     * ProductRepository constructor.
     */
    private $model;

    public function __construct(Product $repository)
    {
        $this->model = $repository;
    }

    public function listAll(){

        $products =  $this->model
                                ->with('Category')
                                ->join('categories','categories.id','=','products.category_id')
                                ->paginate(10);
        return $products;

    }

    public function save($request){

        $product = $this->model
                                ->fill($request);
        $product->save();
    }
    public function find($id){

        return $this->model->find($id);

    }

    public function update($request, $id){
        $this->find($id)
                        ->update($request);
    }

    public function delete($id){

        $this->find($id)->delete();
    }

}