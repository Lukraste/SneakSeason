<?php
namespace App\Http\Controllers\Pages;
use App\Models\Size;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Modele;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    public function all_products ()
    {

        $title = 'Toutes les sneakers';
        $url = '/sneakers';
        $products = Product::select('*')
        ->orderBy('price_vat')
        ->get();

        return view('pages.page-layout',
        [
            'products' => $products,
            'title' => $title,
            'url' => $url
        ]);
    }

    public function all_season ()
    {
        $title = 'Sélection de saison';
        $category = Category::where('name', 'Sélection de saison')->first();
        $url = '/sneakers/selection-de-saison'; 
        $products = $category->products->sortBy('price_vat');

        return view('pages.page-layout',
        [
            'products' => $products,
            'title' => $title,
            'url' => $url
        ]);
    }

    public function all_news ()
    {
        $title = 'Nouveautés';
        $category = Category::where('name', 'Nouveautés')->first();
        $url = '/sneakers/nouveautes';
        $products = $category->products->sortBy('price_vat');

        return view('pages.page-layout',
        [
            'products' => $products,
            'title' => $title,
            'url' => $url
        ]);
    }
    
    public function all_popular ()
    {
        $title = 'Produits populaires';
        $category = Category::where('name', 'Populaires')->first();
        $url = '/sneakers/populaires';
        $products = $category->products->sortBy('price_vat');

        return view('pages.page-layout',
        [
            'products' => $products,
            'title' => $title,
            'url' => $url
        ]);
    }

    public function all_discounts ()
    {
        $title = 'Produits en promotions';
        $category = Category::where('name', 'Promotions')->first();
        $url = '/sneakers/promotions';
        $products = $category->products->sortBy('price_vat');

        return view('pages.page-layout',
        [
            'products' => $products,
            'title' => $title,
            'url' => $url
        ]);
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  String  $slug
     * @return \Illuminate\Http\Response
     */
    public function show_product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('pages.products.product-one', [
            'product' => $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  String  $slug
     * @return \Illuminate\Http\Response
     */
    public function show_brand($slug)
    {
        $brand = Brand::where('slug', $slug)->first();
        return view('pages.brands.brand-one', ['brand' => $brand]);
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  String  $slug
     * @return \Illuminate\Http\Response
     */
    public function show_modele($slug)
    {
        $brand = Modele::where('slug', $slug)->first();
        return view('pages.modeles.model-one', ['modele' => $modele]);
    }

}
