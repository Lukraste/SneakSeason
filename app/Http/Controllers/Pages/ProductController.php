<?php

namespace App\Http\Controllers\Pages;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Size;
use App\Models\CategoryProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all_products()
    {
        $products = Product::all();

        return view('pages.products.all-products',
        [
            'products' => $products,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $Product)
    {
        $products = Product::all();
        return view('pages.products.Product-one', 
        [
            'Product' => $Product,
            'products' => $products
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

    public function saison()
    {
        $products_season_ids = CategoryProduct::select('product_id')
        ->where('category_id', 1)
        ->orderBy('Product_id')
        ->get();
        
        $category = Category::where('id', 1)->first();

        $products_category = Product::whereIn('id', $products_season_ids)->get();

        return view('pages.products.products-list', 
        [
            'products' => $products_category,
            'category' => $category
        ]); 
    }
    public function nouveautes()
    {
        $products_news_ids = CategoryProduct::select('product_id')
        ->where('category_id', 2)
        ->orderBy('Product_id')
        ->get();
        
        $category = Category::where('id', 2)->first();

        $products_category = Product::whereIn('id', $products_news_ids)->get();

        return view('pages.products.products-list', 
        [
            'products' => $products_category,
            'category' => $category
        ]); 
    }
    public function tendances()
    {
        $products_trends_ids = CategoryProduct::select('Product_id')
        ->where('category_id', 3)
        ->orderBy('Product_id')
        ->get();
        
        $category = Category::where('id', 3)->first();

        $products_category = Product::whereIn('id', $products_trends_ids)->get();

        return view('pages.products.products-list', 
        [
            'products' => $products_category,
            'category' => $category
        ]); 
    }

    public function promotions()
    {
        $products_discounts_ids = CategoryProduct::select('Product_id')
        ->where('category_id', 4)
        ->orderBy('Product_id')
        ->get();
        
        $category = Category::where('id', 4)->first();

        $products_category = Product::whereIn('id', $products_discounts_ids)->get();

        return view('pages.products.products-list', 
        [
            'products' => $products_category,
            'category' => $category
        ]); 
    }

    public function all_sizes()
    {
        $sizes = Size::all();
        return view('pages.sizes.list', ['sizes' => $sizes,]);
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all_brands()
    {
        $brands = Brand::all();
        return view('pages.brands.brands-list', ['brands' => $brands,]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function one_brand(Brand $brand)
    {
        return view('pages.brands.brand-one', ['brand' => $brand]);
    }
}
