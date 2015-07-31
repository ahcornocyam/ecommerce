<?php

namespace ecommerce\Http\Controllers;

use ecommerce\Category;
use ecommerce\Http\Repositories\Category\CategoryRepository;
use ecommerce\Http\Repositories\Product\ProductRepository;
use Illuminate\Http\Request;
use ecommerce\Http\Requests\ProductRequest;
use ecommerce\Http\Requests;
use ecommerce\Http\Controllers\Controller;

class ProductsController extends Controller
{
    private $repository;
    private $categoryRepository;

    /**
     * ProductsController constructor.
     */
    public function __construct(ProductRepository $repository, CategoryRepository $categoryRepository)
    {
        $this->repository           = $repository;
        $this->categoryRepository   = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = $this->repository
                                    ->listAll();
        return view('Product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = $this->categoryRepository
                                            ->listName();
        return view('Product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ProductRequest $request)
    {
        $input = $request->all();
        $this->repository
                        ->save($input);
        return redirect()->route('product');
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
        $categories = $this->categoryRepository->listName();
        $product = $this->repository
                                    ->find($id);
        return view('Product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update( ProductRequest $request, $id)
    {
        $input = $request->all();

        if (!array_key_exists('featured', $input)) {
            $input['featured'] = 0;
        }

        if (!array_key_exists('recommend', $input)) {
            $input['recommend'] = 0;
        }

        $this->repository->update($input,$id);

        return redirect()->route('product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
       $this->repository
                        ->delete($id);
       return redirect()->route('product');
    }
}
