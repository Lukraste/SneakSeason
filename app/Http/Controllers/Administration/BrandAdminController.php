<?php

namespace App\Http\Controllers\Administration;

use App\Models\Brand;
use App\Models\Sneaker;
use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BrandAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.list', ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sneakers = Sneaker::all();
        return view('admin.brands.form', ['sneakers' => $sneakers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->name = $request->has('name') && strlen($request->name) ? $request->name : 'unknown';
        $brand->description = $request->has('description ') && strlen($request->description ) ? $request->description  : 'Pas de description';
        $brand->image = $request->has('image') && strlen($request->image) ? $request->image : 'images/image.png';
        $brand->save();
        if($request->sneakers)
        {
            $sneakers = Sneaker::find($request->sneakers);
            $brand->sneakers()->saveMany($sneakers);
        }
        $brand->save();

        return redirect('/admin/brands');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('admin.brands.one', ['brand' => $brand]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $sneakers = Sneaker::all();
        return view('admin.brands.form', [
            'brand' => $brand,
            'sneakers' => $sneakers
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $brand->name = $request->has('name') && strlen($request->name) ? $request->name : 'unknown';
        $sneakers = Sneaker::find($request->sneakers);
        if($request->sneakers)
        {
            
            $brand->sneakers()->saveMany($sneakers);
        }
        $brand->save();
        
        return redirect('/admin/brands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect('/admin/brands');
    }
}
