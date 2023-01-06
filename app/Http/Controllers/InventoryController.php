<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\productUnit;
use App\Http\Controllers\BaseController;

class InventoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        $unit = Unit::find($request->unit_id);

        $productunit = new productUnit();
        $productunit->product_id=$request->product_id;
        $productunit->unit_id=$request->unit_id;
        $productunit->amount=$request->amount;
        $productunit->save();
        return $this->sendResponse($productunit, 'inventories');

    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
