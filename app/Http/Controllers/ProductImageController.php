<?php

namespace ecommerce\Http\Controllers;

use ecommerce\Http\Repositories\Product\ProductRepository;
use ecommerce\Http\Repositories\ProductImage\ProductImageRepository;
use ecommerce\ProductImage;
use Illuminate\Http\Request;

use ecommerce\Http\Requests;
use ecommerce\Http\Controllers\Controller;

class ProductImageController extends Controller
{
    private $productsRepository;
    private $repository;


    /**
     * ProductImageController constructor.
     */
    public function __construct(ProductImageRepository $repository, ProductRepository $productRepository)
    {
        $this->repository               = $repository;
        $this->productsRepository       = $productRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id)
    {
        $product = $this->productsRepository->find($id);
        return view('ProductImage.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {
        $product = $this->productsRepository->find($id);
        return  view('ProductImage.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\ProductImageRequest $request, $id)
    {

        $this->repository->saveImage($request,$id);
        return redirect()->route('images',['id'=>$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return redirect()->route('images',['id'=>$this->repository->deleteImage($id)]);
    }
}
