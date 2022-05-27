<?php

namespace App\Http\Controllers\Pages;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $new_category = Category::where('name', 'Nouveautés')->first();
        $popular_category = Category::where('name', 'Populaires')->first();

        $brand_nike = Brand::where('name', 'Nike')->first();
        $brand_adidas = Brand::where('name', 'Adidas')->first();

        $new_products = $new_category->products->sortBy('price_vat');
        $popular_products = $popular_category->products->sortBy('price_vat');

        return view('homepage',
            [
                'new_products' => $new_products,
                'popular_products' => $popular_products,
                'brand_nike' => $brand_nike,
                'brand_adidas' => $brand_adidas
            ]);
    }

    public function rgpd()
    {
        return view('pages.about.rgpd');
    }
    public function cgu()
    {
        return view('pages.about.cgu');
    }
    public function cookies()
    {
        return view('pages.about.cookies');
    }
}
