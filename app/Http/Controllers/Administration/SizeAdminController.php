<?php

namespace App\Http\Controllers\Administration;

use App\Models\Size;
use App\Models\Sneaker;
use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SizeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = Size::all();
        return view('admin.sizes.list', ['sizes' => $sizes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sneakers = Sneaker::all();
        return view('admin.sizes.form', ['sneakers' => $sneakers]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $size = new Size;
        $size->size = $request->has('size') && strlen($request->size) ? $request->size : 'unknown';
        $size->save();
        if($request->sneakers)
        {
            $sneakers = Sneaker::find($request->sneakers);
            $size->sneakers()->saveMany($sneakers);
        }
        $size->save();


        return redirect('/admin/sizes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        return view('admin.sizes.one', ['size' => $size]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        $sneakers = Sneaker::all();
        return view('admin.sizes.form', [
            'size' => $size,
            'sneakers' => $sneakers
            ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $size)
    {
        $size->size = $request->has('size') && strlen($request->size) ? $request->size : 'unknown';
        $sneakers = Sneaker::find($request->sneakers);
        $size->save();
        if($request->sneakers)
        {
            $size->sneakers()->sync($sneakers);
        }
        $size->save();


        return redirect('/admin/sizes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        $size->delete();

        return redirect('/admin/sizes');
    }
}
