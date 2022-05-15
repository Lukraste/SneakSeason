<?php

namespace App\Http\Controllers;

use App\Models\Sneaker;
use App\Http\Requests\StoreSneakerRequest;
use App\Http\Requests\UpdateSneakerRequest;

class SneakerController extends Controller
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
     * @param  \App\Http\Requests\StoreSneakerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSneakerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function show(Sneaker $sneaker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function edit(Sneaker $sneaker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSneakerRequest  $request
     * @param  \App\Models\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSneakerRequest $request, Sneaker $sneaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sneaker $sneaker)
    {
        //
    }
}
