<?php

namespace ecommerce\Http\Repositories\ProductImage;
use ecommerce\Http\Repositories\Product\ProductRepository;
use ecommerce\ProductImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
        $this->model = $repository;
    }

    public function saveImage($request, $id){

        $file       = $request->file('image');
        $extension  = $file->getClientOriginalExtension();
        $image      = $this->model->create(['product_id'=>$id,'extension'=>$extension]);
        Storage::disk('local_public')->put($image->id.'.'.$extension,File::get($file));

    }

    public function deleteImage($id){
        $image          = $this->model->find($id);
        $product_id     = $image->product_id;

        if(file_exists(public_path().'/uploads/'.$image->id.'.'.$image->extension)){
            Storage::disk('local_public')->delete($image->id.'.'.$image->extension);
        }

        $image->delete();
        return $product_id;
    }




}