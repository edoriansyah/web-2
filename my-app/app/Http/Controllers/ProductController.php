<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // $products = [
        //     ['name' => 'Product 1', 'price' => 100],
        //     ['name' => 'Product 2', 'price' => 200],
        //     ['name' => 'Product 3', 'price' => 300],
        // ];

        // Product::create([
        //     'name' => 'Product 1',
        //     'price' => 100,
        // ]);

        $products = Product::all();

        return view('products.index', compact('products'));
    }
}
