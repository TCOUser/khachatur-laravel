<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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


// commit add

Route::get('/home', function (){
    return view('admin.home');
});

use App\Http\Controllers\UserController;
Route::get('/login', [UserController::class, 'getLogin'])->name('login');;
Route::post('/login', [UserController::class, 'postLogin']);

Route::get('/signUp', [UserController::class, 'signup'])->name('user.signup');
Route::post('/signUp', [UserController::class, 'postSignUp']);

//Route::get('/login', 'UserController@getLogin' );

Route::get('conflict', function(){
    dd("test");

});

Route::get('/loginProd', [UserController::class, 'getLoginProd'])->name('loginProd');;
Route::post('/loginProd', [UserController::class, 'postLoginProd']);

//Route::get('allProds', [DashboardController::class, 'getProdsAll'])->name('dashboardAllProds');
Route::group(['middleware' => ['loggedIn']], function (){
    Route::get('users', [UserController::class, 'getUsers']);
    Route::get('feed', [DashboardController::class, 'getFeed']);
    Route::get('addProd', [DashboardController::class, 'getProdIn'])->name('dashboardProd');
    Route::get('users-list', [UserController::class, 'getUsers'])->name('user.list');

    Route::get('/addProd', [UserController::class, 'getaddProd'])->name('add.prod');
    Route::post('/addProd', [UserController::class, 'postaddprod'])->name('add.prod');

    Route::get('/allProds', [UserController::class, 'getProds'])->name('allProds');
    Route::post('/allProds', [UserController::class, 'getProds']);

    Route::get('feed', [DashboardController::class, 'getFeed'])->name('dashboard');


});
