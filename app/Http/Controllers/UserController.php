<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Http\Requests\CreateUsersRequest;
use App\Http\Requests\CreateProductsRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getLogin(){
        return view('login', [
            'date' => 2021,
            'status' => true
        ]);
    }
    public function postLogin(Request $request) {

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }


    }
    public function SignUp() {
        return view('signUp');

    }
    public function dd() {
        dd(1);
    }
    public function postSignUp(CreateUsersRequest $request) {



        //php artisan make:request CreateUsersRequest

        /*$validated = $request->validate([
            'name' => 'required|min:3|max:64',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        dd($validated);*/


        $data = $request->validated();


        $user = User::create($data);

        return redirect()->route('login')->with('success', 'You have successfully signed up');

    }
    public function getUsers()
    {
        $users = User::get();  //collection

        return view('users-list', [
            'users' => $users
        ]);
    }


    public function getaddProd ()
    {
        return view('addProd');
    }
    public function postaddprod(CreateProductsRequest $request) {


        $data = $request->validated();
        $data = $request->only('Name', 'price');
        $data['user_id'] = Auth::user()->id;
        $prods = Product::create($data);
        return redirect()->route('allProds')->with('success', 'You have successfully added product');

    }
    public function getProds()
    {
        $prods = Product::get();
        return view('allProds', [
            'prods' => Product::where('user_id', Auth::user()->id)->get()
        ]);
    }
    public function getLoginProd ()
    {
        return view('loginProd', [
            'date' => 2021,
            'status' => true
        ]);
    }
    public function postLoginProd (Request $request) {

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect()->route('dashboardProd');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function getProdsAll (Request $request) {

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect()->route('dashboardAllProds');
        } else {
            return redirect()->route('loginProd')->with('error', 'Invalid email or password');
        }


    }

}
