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


//GET METHOD
Route::get('/login', [UserController::class, 'getLogin'])->name('login');
Route::get('/sign-up', [UserController::class, 'getSignUp'])->name('user.signup');

//POST METHOD
Route::post('/login', [UserController::class, 'postLogin']);
Route::post('/sign-up', [UserController::class, 'postSignUp']);
//////////////////////////////////////////////////////////////////////////////

//commit 2 test

Route::get('/gumarum',[UserController::class, 'getGumarum']);
Route::get('/hanum',[UserController::class, 'getHanum']);
Route::get('/bazmapatkum',[UserController::class, 'getBazmapatkum']);
Route::get('/bajanum',[UserController::class, 'getBajanum']);


Route::get('/users', [UserController::class, 'getUsers'])->name('users.list');




//Route::post('/gumarum',[UserController::class,'postGumarum']);
//Route::post('/hanum',[UserController::class,'postHanum']);
//Route::post('/bazmapatkum',[UserController::class,'postBazmapatkum']);
//Route::post('/bajanum',[UserController::class,'postBajanum']);
//
//
//////////
// route::get('conf',function(){
//     dd(6);
//});
//
//
//Route::post('/gumarum',[UserController::class,'postGumarum']);
//Route::post('/hanum',[UserController::class,'postHanum']);


