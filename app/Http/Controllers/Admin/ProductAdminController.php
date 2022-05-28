<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductAdminController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $collections = Collection::all();
        $colors = Color::all();
        $sizes = Size::all();

        return view('admin.forms.product-form', [
            'brands' => $brands,
            'colors' => $colors,
            'sizes' => $sizes,
            'collections' => $collections
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->has('name') && strlen($request->name) ? $request->name : 'unknown';
        $product->slug = $request->has('slug') && strlen($request->slug) ? $request->slug : 'unknown';
        $product->price_vat =  $request->price_vat;
        $product->product_code = $request->has('product_code') && strlen($request->product_code) ? $request->product_code: 'unknown';
        $product->gender= $request->gender;
        $product->stock = $request->stock;
        $product->description = $request->has('description') && strlen($request->description) ? $request->description : 'unknown';

        $brand_id = Brand::find($request->brand_id);
        $color_id = Color::find($request->color_id);
        $collection_id = Collection::find($request->collection_id);
        $sizes = Size::find($request->sizes);

        $product->brand()->associate($brand_id);
        $product->color()->associate($color_id);
        $product->collection()->associate($collection_id);

        $product->save();

        if($request->sizes)
        {
            $product->sizes()->saveMany($sizes);
        }
        $product->save();
        return redirect('/admin/products-list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $brands = Brand::all();
        $collections = Collection::all();
        $colors = Color::all();
        $sizes = Size::all();

        return view('admin.forms.product-form-update', [
            'product'=> $product,
            'brands' => $brands,
            'colors' => $colors,
            'sizes' => $sizes,
            'collections' => $collections
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->has('name') && strlen($request->name) ? $request->name : 'unknown';
        $product->slug = $request->has('slug') && strlen($request->slug) ? $request->slug : 'unknown';
        $product->price_vat =  $request->price_vat;
        $product->product_code = $request->has('product_code') && strlen($request->product_code) ? $request->product_code: 'unknown';
        $product->gender= $request->gender;
        $product->stock = $request->stock;
        $product->description = $request->has('description') && strlen($request->description) ? $request->description : 'unknown';

        $brand_id = Brand::find($request->brand_id);
        $color_id = Color::find($request->color_id);
        $collection_id = Collection::find($request->collection_id);
        $sizes = Size::find($request->sizes);

        $product->brand()->associate($brand_id);
        $product->color()->associate($color_id);
        $product->collection()->associate($collection_id);

        $product->save();

        if($request->sizes)
        {
            $product->sizes()->sync($sizes);
        }

        $product->save();
        return redirect('/admin/products-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
