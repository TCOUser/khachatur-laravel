<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('admin.home');
});

use App\Http\Controllers\UserController;



//commit 2 test

Route::get('/login', [UserController::class, 'getLogin'])->name('login');
Route::get('/sign-up', [UserController::class, 'getSignUp'])->name('user.signup');
Route::get('/users', [UserController::class, 'getUsers'])->name('user.list');
Route::get('/admin', [UserController::class, 'getAdmin'])->name('admin');
Route::get('/products', [UserController::class, 'getProducts'])->name('product.list');



//POST METHOD

Route::post('/login', [UserController::class, 'postLogin']);
Route::post('/sign-up', [UserController::class, 'postSignUp']);
Route::post('/admin', [UserController::class, 'postAdmin']);
