<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
      $brands = Brand::all();
      View::share('homepage', $brands);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sneakers = Sneaker::all();
        return view('pages.homepage', ['sneakers' => $sneakers]);
    }
}
