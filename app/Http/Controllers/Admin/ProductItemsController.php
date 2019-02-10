<?php

namespace App\Http\Controllers\Admin;

use App\ProductGroup;
use App\ProductItem;
use App\ProductSeries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductItemsController extends AdminBaseController
{
    public function __construct()
    {
        parent::__construct();

        $items = ProductItem::all();
        $this->vars = array_add($this->vars, 'items', $items);

        $series = ProductSeries::all();
        $this->vars = array_add($this->vars, 'series', $series);

        $groups = ProductGroup::all();
        $this->vars = array_add($this->vars, 'groups', $groups);
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
    public function create($id)
    {
        $serial = ProductSeries::find($id);
        $this->vars = array_add($this->vars, 'serial', $serial);

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
        ProductItem::create($request->all());

        return redirect()->route($this->route . '.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductItem $productItem)
    {
        $this->vars = array_add($this->vars, 'item', $productItem);

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductItem $productItem)
    {
        $data = $request->all();

        $productItem->update($data);

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
