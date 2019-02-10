<?php

namespace App\Http\Controllers\Admin;

use App\OurAddress;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurAddressesController extends AdminBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->addresses = OurAddress::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->vars = array_add($this->vars,'addresses', $this->addresses);

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
        $data = $request->all();

        if($data['office'])
            $data['short'] = $data['street'] . ', ' . $data['building'] . ', оф. ' . $data['office'];
        else
            $data['short'] = $data['street'] . ', ' . $data['building'];

        $data['full'] = $data['city'] . ', ' . $data['short'];

        OurAddress::create($data);

        return redirect()->route('admin');
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
    public function edit(OurAddress $ourAddress)
    {
        $this->vars = array_add($this->vars, 'address', $ourAddress);

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurAddress $ourAddress)
    {
        $data = $request->all();

        if($data['office'])
            $data['short'] = $data['street'] . ', ' . $data['building'] . ', оф. ' . $data['office'];
        else
            $data['short'] = $data['street'] . ', ' . $data['building'];

        $data['full'] = $data['city'] . ', ' . $data['short'];

        $ourAddress->update($data);

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
