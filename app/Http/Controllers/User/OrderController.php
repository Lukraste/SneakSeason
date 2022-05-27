<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Controllers\Controller;


class OrderController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;

        $sneaker_id = Sneaker::find($request->id);
        $user_id = Auth::user('id');
        $size_id = Size::find($request->size_id);
        $quantity = $request->quantity;
        
        $order->sneaker()->associate($sneaker_id);
        $order->user()->associate($user_id);
        $order->size()->associate($size_id);
        $order->quantity = $quantity;
        
        $order->save();

        return redirect('/');
    }

         /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shopping_cart = new ShoppingCart;

        $Product_id = Product::find($request->Product_id);
        $user_id = Auth::user('id');
        $size_id = Size::find($request->size_id);
        
        $shopping_cart->Product()->associate($Product_id);
        $shopping_cart->user()->associate($user_id);
        $shopping_cart->size()->associate($size_id);

        $shopping_cart->quantity = $request->quantity;
        
        $shopping_cart->save();

        return redirect('/user/profile/shopping');
    }

}
