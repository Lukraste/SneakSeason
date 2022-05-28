<?php

namespace App\Http\Controllers\User;

use App\Models\Size;
use App\Models\User;
use App\Models\Product;
use App\Models\UserProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserProductController extends Controller
{
       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {        
        $favoris = new UserProduct;

        $product = Product::find($request->product_id);
        $user_id = Auth::user('id');

        $favoris->product()->associate($product->id);
        $favoris->user()->associate($user_id->id);

        $favoris->save();

        return view('pages.users.favoris');
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  Int  $product_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        UserProduct::where('product_id', $product_id)->delete();
        return redirect('/mon-compte/favoris');
    }
}
