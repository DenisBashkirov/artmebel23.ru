<?php

namespace App\Http\Controllers\Admin;

use App\ProductModel;
use App\ProductItem;
use Illuminate\Http\Request;

class ProductModelsController extends AdminBaseController
{
    public function __construct()
    {
        parent::__construct();

        $models = ProductModel::all();
        $this->vars = array_add($this->vars, 'models', $models);

        $items = ProductItem::all();
        $this->vars = array_add($this->vars, 'items', $items);
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
        ProductModel::create($request->all());

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
    public function edit(ProductModel $productModel)
    {
        $this->vars = array_add($this->vars, 'model', $productModel);

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductModel $productModel)
    {
        $data = $request->all();

        $data['item_id'] ? $data['item_id'] : $data['item_id'] = $productModel->item_id;

        $productModel->update($data);

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
