<?php

namespace App\Http\Controllers\Admin;

use App\ProductCategory;
use App\ProductSubcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductSubcategoriesController extends AdminBaseController
{
    public function __construct()
    {
        parent::__construct();
        $categories = ProductCategory::all();
        $this->vars = array_add($this->vars, 'categories', $categories);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = ProductSubcategory::all();
        $this->vars = array_add($this->vars, 'subcategories', $subcategories);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = ProductCategory::find($request->category_id);
        $category->subcategories()->create($request->all());

        return redirect()->route($this->route . '.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSubcategory $productSubcategory)
    {
        $this->vars = array_add($this->vars, 'subcategory', $productSubcategory);

        return $this->renderOutput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductSubcategory $productSubcategory)
    {
        $this->vars = array_add($this->vars, 'subcategory', $productSubcategory);

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductSubcategory $productSubcategory)
    {
        $data = $request->all();

        $data['category_id'] ? $data['category_id'] : $data['category_id'] = $productSubcategory->type_id;

        $productSubcategory->update($data);

        return redirect()->route($this->route . '.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
