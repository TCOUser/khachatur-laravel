<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getFeed ()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'login exi ape');
        }

        return view('feed');
    }
    public function getProdIn ()
    {
        if (!Auth::check()) {
            return redirect()->route('loginProd')->with('error', 'login exi ape');
        }

        return view('addProd');
    }
    public function getProdsAll ()
    {
        if (!Auth::check()) {
            return redirect()->route('loginProd')->with('error', 'login exi ape');
        }

        return view('allProds');
    }


}
