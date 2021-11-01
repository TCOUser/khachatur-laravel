<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getFeed ()
    {

        return view('feed', ['products' =>Auth::user()->products]);
    }
//    public function getProdIn ()
//    {
//        if (!Auth::check()) {
//            return redirect()->route('loginProd')->with('error', 'login exi ');
//        }
//
//        return view('addProd');
//    }
//    public function getProdsAll ()
//    {
//        if (!Auth::check()) {
//            return redirect()->route('loginProd')->with('error', 'login exi ape');
//        }
//
//        return view('allProds');
//    }


}
