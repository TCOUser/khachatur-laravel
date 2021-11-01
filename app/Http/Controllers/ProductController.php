<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('product', ['categories' =>$categories]);
    }
    public function store(Request $request)
    {
        Product::create(
            $request->only('name', 'price')
        );
        return redirect('/products');
    }
}
