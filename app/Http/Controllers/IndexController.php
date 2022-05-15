<?php

namespace App\Http\Controllers;

use App\Models\Sneaker;
use App\Models\Brand;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepage');
    }
}