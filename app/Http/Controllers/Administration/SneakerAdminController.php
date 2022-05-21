<?php

namespace App\Http\Controllers\Administration;

use App\Models\Sneaker;
use App\Models\Brand;
use App\Models\Size;
use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SneakerAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sneakers = Sneaker::all();
        return view('admin.sneakers.list', ['sneakers' => $sneakers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sizes = Size::all();
        $brands = Brand::all();
        return view('admin.sneakers.form', [
            'brands' => $brands,
            'sizes' => $sizes
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
        $sneaker = new Sneaker;
        $sneaker->name = $request->has('name') && strlen($request->name) ? $request->name : 'unknown';
        $sizes = Size::find($request->sizes);
        $brand_id = Brand::find($request->brand_id);
        $sneaker->brand()->associate($brand_id);
        $sneaker->sex = $request->sex;
        $sneaker->priceVAT = $request->has('priceVAT') && strlen($request->priceVAT) ? $request->priceVAT : 0 ;
        $sneaker->bar_code = $request->bar_code;
        $sneaker->save();

        if($request->sizes)
        {
            $sneaker->sizes()->saveMany($sizes);
        }

        $sneaker->save();

        return redirect('/admin/sneakers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function show(Sneaker $sneaker)
    {
        return view('admin.sneakers.one', ['sneaker' => $sneaker]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function edit(Sneaker $sneaker)
    {
        $sizes = Size::all();
        $brands = Brand::all();
        return view('admin.sneakers.form', [
            'sneaker' => $sneaker,
            'brands' => $brands,
            'sizes' => $sizes
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sneaker $sneaker)
    {
        $sneaker->name = $request->has('name') && strlen($request->name) ? $request->name : 'unknown';
        $sizes = Size::find($request->sizes);
        $brand_id = Brand::find($request->brand_id);
        $sneaker->brand()->associate($brand_id);
        $sneaker->sex= $request->sex;

        $sneaker->save();

        if($request->sizes)
        {
            $sneaker->sizes()->sync($sizes);
        }

        $sneaker->priceVAT = $request->has('priceVAT') && strlen($request->priceVAT) ? $request->priceVAT : 0 ;
        $sneaker->save();

        return redirect('/admin/sneakers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sneaker $sneaker)
    {
        $sneaker->delete();

        return redirect('/admin/sneakers');
    }
}
