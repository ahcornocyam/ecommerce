<?php

namespace ecommerce\Http\Controllers;

use Illuminate\Http\Request;

use ecommerce\Http\Requests\CategoryRequest;
use ecommerce\Http\Controllers\Controller;
use ecommerce\Http\Repositories\Category\CategoryRepository;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    private $repository;

    public function __construct(CategoryRepository $repository){
        $this->repository = $repository;
    }
    public function index()
    {
        $categories  = $this->repository->listAll();
        return view('Category.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('Category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CategoryRequest $request)
    {
        $input = $request->all();

        $this->repository->save($input);

        return redirect()->route('category');
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
        $category = $this->repository->find($id);
        return view('Category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $input = $request->all();
        $this->repository->update($input,$id);

        return redirect()->route('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('category');
    }
}
