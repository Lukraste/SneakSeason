<?php

namespace App\Http\Controllers\Pages;
use App\Models\Product;
use App\Models\Brand;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $new_products_id = CategoryProduct::select('product_id')
        ->where('category_id', 2)
        ->orderBy('product_id')
        ->get();

        $popular_products_id = CategoryProduct::select('product_id')
        ->where('category_id', 3)
        ->orderBy('product_id')
        ->get();
        
        $popular_products = Product::whereIn('id', $popular_products_id)->get();
        $new_products = Product::whereIn('id', $new_products_id)->get();

        $brand_nike = Brand::find(1);
        $brand_adidas = Brand::find(2);


        return view('homepage',
            [
                'popular_products' => $popular_products,
                'new_products' => $new_products,
                'brand_nike' => $brand_nike,
                'brand_adidas' => $brand_adidas
            ]);
    }

    public function rgpd()
    {
        return view('pages.docs.rgpd');
    }

    public function cgu()
    {
        return view('pages.docs.cgu');
    }
}
