<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\productUnit;
use App\Models\Image;

class ProductController extends BaseController
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

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());
    }
    public function show(Product $product, Request $request)
    {
        if($request->unit_id!=null){
            $product->TotalQuantityByUnitIdAttribute($request->unit_id);
        }
        return $product;
    }

    // public function show_total($product_id,Request $request)
    // {
        
    //     $product = Product::find($product_id);
    //     $total=$product->getTotalQuantityAttribute();
    //     return $this->sendResponse([$product->name,$total],'total_quantity');

    // }

    // public function get_total_quantity_by_unit_id($product_id,Request $request)
    // {
    //     $product = Product::find($product_id);
    //     $unit = Unit::find($request->unit_id);
    //     $t=$product->getTotalQuantityAttribute();
    //     $total=$t/($unit->modifier);
    //     return $this->sendResponse($total,'total_quantity by '.$unit->name);
    // }

    public function show_product($product_id)
    {
        $product = Product::find($product_id);
        return $this->sendResponse([$product->name,$product->getImagePathAttribute()],'the product '.$product->name.' and its image path ');        
    }
///////////////////////////////////////////////////
////////////////////////////////////////////////////////

    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
