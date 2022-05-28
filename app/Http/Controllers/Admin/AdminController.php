<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin-dashboard');
    }

    public function products()
    {
        $products = Product::all();
        return view('admin.lists.products-list', ['products' => $products]);
    }

    public function users()
    {
        $users = User::all();
        return view('admin.lists.users-list', ['users' => $users]);
    }

    public function orders()
    {
        $orders = Order::all();
        return view('admin.lists.orders-list', ['orders' => $orders]);
    }
    public function inventories()
    {
        $inventories= Inventory::all();
        return view('admin.lists.inventories-list', ['inventories' => $inventories]);
    }
}
