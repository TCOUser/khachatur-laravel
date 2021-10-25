<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('login', [
            'date' => 2021,
            'status' => false,
        ]);
    }

    public function postLogin(Request $request)
    {
        $data = $request->only('email', 'password');
        dd($data);
    }

    public function getSignUp()
    {
        return view('sign-up');
    }

    public function postSignUp(Request $request)
    {
        $data = $request->only('name', 'email', 'password');
        $user = User::create($data);

        return redirect()->route('login')->with('success', 'You have successfully signuped');
    }

/////////////////////////////////////////////////////////////////

    public function getGumarum()
    {
        return view('gumarum');
    }

    public function postGumarum(Request $request)
    {
        $a = $request->only('numberOne');
        $b = $request->only('numberTwo');
        $c = $a['numberOne'] + $b['numberTwo'];
        dd($c);
    }

    public function getHanum()
    {
        return view('hanum');
    }

    public function postHanum(Request $request)
    {
        $a = $request->only('numberOne');
        $b = $request->only('numberTwo');
        $c = $a['numberOne'] - $b['numberTwo'];
        dd($c);
    }

    public function getBazmapatkum()
    {
        return view('bazmapatkum');
    }

    public function postBazmapatkum(Request $request)
    {
        $a = $request->only('numberOne');
        $b = $request->only('numberTwo');
        $c = $a['numberOne'] * $b['numberTwo'];
        dd($c);
    }

    public function getBajanum()
    {
        return view('bajanum');
    }

    public function postBajanum(Request $request)
    {
        $a = $request->only('numberOne');
        $b = $request->only('numberTwo');
        $c = $a['numberOne'] / $b['numberTwo'];
        dd($c);
    }

    public function getUsers()
    {
       $users = User::get();  //collection

       return view('users-list',['users'=>$users]);

    }
    public function getAdmin() {
        return view('products');
    }
    public function postAdmin(Request  $request) {
        $data = $request->only('product', 'price');
        $productTable = Product::create($data);

        return redirect()->route('admin')->with('success', 'You have successfully added product');
    }
    public function getprodlist() {
        $products = Product::get(); // heta tali collection
        return view('product-list', [
            'products' => $products
        ]);
    }

}
