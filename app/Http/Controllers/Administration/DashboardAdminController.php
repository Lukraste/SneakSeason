<?php

namespace App\Http\Controllers\Administration;

use App\Models\User;
use App\Models\Sneaker;
use App\Models\Brand;
use App\Models\Size;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->count();
        $sneakers = Sneaker::all()->count();
        $brands = Brand::all()->count();
        $sizes = Size::all()->count();
        $orders = Order::all()->count();

        $last_users = User::latest()->take(5)->get();;
        $last_sneakers = Sneaker::latest()->take(5)->get();;

        $sneakers_nike = Sneaker::all()->where('brand_id', '=', 1)->count();
        $sneakers_adidas = Sneaker::all()->where('brand_id', '=', 2)->count();
        $sneakers_asics = Sneaker::all()->where('brand_id', '=', 3)->count();
        $sneakers_jordan = Sneaker::all()->where('brand_id', '=', 4)->count();
        $sneakers_puma = Sneaker::all()->where('brand_id', '=', 5)->count();

        return view('admin.dashboard', [
            'users' => $users,
            'sneakers' => $sneakers,
            'brands' => $brands,
            'sizes' => $sizes,
            'orders' => $orders,
            'last_users' => $last_users,
            'last_sneakers' => $last_sneakers,
            'sneakers_nike' => $sneakers_nike,
            'sneakers_adidas' => $sneakers_adidas,
            'sneakers_asics' => $sneakers_asics,
            'sneakers_jordan' => $sneakers_jordan,
            'sneakers_puma' => $sneakers_puma
            ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
