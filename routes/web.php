<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\UserController;
use Illuminate\Session\Middleware\AuthenticateSession;
use App\Http\Controllers\CarController;
use App\Http\Controllers\FileController;
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


//Login
Route::post('/login', [UserController::class, 'postLogin'])->name('login');
Route::get('/login', [UserController::class, 'getLogin']);

//Sign-up
Route::get('/sign-up', [UserController::class, 'getSignUp'])->name('user.signup');
Route::post('/sign-up', [UserController::class, 'store']);


Route::middleware('auth')->group(function () {
    //Products
    Route::get('/products', [ProductsController::class, 'getProducts'])->name('products');
    Route::post('/products', [ProductsController::class, 'postProducts'])->name('products');;
    Route::get('/products-list', [ProductsController::class, 'getProductsList'])->name('products.list');
    Route::post('/products-list', [ProductsController::class, 'postProductsList']);
    //Feed
    Route::get('feed', [DashboardController::class, 'getFeed'])->name('feed');
    //Users-list
    Route::get('users', [UserController::class, 'getUsers'])->name('users.list');

    //Cars
    Route::get('/cars', [CarController::class, 'getCars'])->name('cars');
    Route::post('/cars', [CarController::class, 'postCars']);
    Route::get('/cars-list', [CarController::class, 'getCarsList'])->name('cars-list');
    Route::post('/cars-list', [CarController::class, 'postCarsList']);
    //Puth
    Route::get('users/edit',[UserController::class, 'edit'])->name('users.edit');
    Route::put('users',[UserController::class, 'update']);



    Route::get('/files',[FileController::class,'edit'])->name('files.edit');
    Route::post('/files/list',[FileController::class,'show'])->name('files.list');
    Route::get('/files/list',[FileController::class,'store'])->name('files.show');

});





Route::post('logout', [UserController::class, 'logOut']);


