<?php

namespace App\Http\Controllers\User;

use App\Models\Size;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Faker\Generator;

class OrderController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faker = app(Generator::class);
        $order = new Order;
        $product = Product::find($request->id);
        $user_id = Auth::user('id');
        $size_id = Size::find($request->size_id);
        $quantity = $request->quantity;

        $order->product()->associate($product->id);
        $order->user()->associate($user_id);
        $order->size()->associate($size_id);
        $order->quantity = $quantity;
        $order->reference_code = $faker->ean13;
        $order->date = now();
        $order->total_price_vat = $product->price_vat*$quantity;
        $order->save();

        return redirect('/mon-compte/commandes');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  String  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($order)
    {
        Order::where('reference_code', $order)->delete();
        return back();
    }
}

