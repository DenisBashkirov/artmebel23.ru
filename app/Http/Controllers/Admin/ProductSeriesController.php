<?php

namespace App\Http\Controllers\Admin;

use App\ProductSeries;
use App\ProductSubcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductSeriesController extends AdminBaseController
{
    public function __construct()
    {
        parent::__construct();

        $series = ProductSeries::all();
        $this->vars = array_add($this->vars, 'series', $series);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $subcategory = ProductSubcategory::find($request->subcategory_id);
        $subcategory->series()->create($request->all());

        return redirect()->route($this->route . '.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSeries $productSeries)
    {
        $this->vars = array_add($this->vars, 'serial', $productSeries);

        return $this->renderOutput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductSeries $productSeries)
    {
        $this->vars = array_add($this->vars, 'serial', $productSeries);

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductSeries $productSeries)
    {
        $data = $request->all();

        $data['subcategory_id'] ? $data['subcategory_id'] : $data['subcategory_id'] = $productSeries->subcategory_id;

        $productSeries->update($data);

        return redirect()->route($this->route . '.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductSeries $productSeries)
    {
        //
    }
}
