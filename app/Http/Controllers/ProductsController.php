<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductsRequest;
use App\Models\Category;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{


    public function getProducts()
    {

        return view('products', [
            'categories' => Category::all()
        ]);
//        $products = Products::get();                                 //talisa collection
//        return view('products-list', [
//            'products' => $products
//        ]);

    }

    public function postProducts(CreateProductsRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        $products = Products::create($data);
        return redirect()->route('products-list')->with('success', 'You have successfully saved your product');
    }

    public function getProductsList()
    {
        $products = Products::get();

        return view("products-list", [
            'products' => Products::where('user_id', Auth::user()->id)->get()
        ]);

    }

    public function postProductsList(Request $request)
    {

        $prods = Products::all();

        $delProduct = $request->only('id');

        $delete = Products::where('id', $delProduct)->delete();

        return redirect('products-list');
    }
}
