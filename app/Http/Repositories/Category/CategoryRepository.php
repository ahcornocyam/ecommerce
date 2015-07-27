<?php

/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 27/07/15
 * Time: 17:11
 */
namespace ecommerce\Http\Repositories\Category;
use ecommerce\Category;
class CategoryRepository
{
    private  $model;

    public function __construct(Category $category){
        $this->model = $category;
    }

    public function listAll(){
        return $this->model->paginate(5);
    }

    public function save($request){

        $category = $this->model->fill($request);
        $category->save();
    }

    public function find($id){

        return $this->model->find($id);

    }

    public function update($request, $id){
        $this->find($id)->update($request);
    }

    public function delete($id){

        $this->find($id)->delete();
    }
}