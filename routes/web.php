<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIUserController ;
use App\Http\Controllers\UserController ;
use App\Http\Controllers\AdresseController ;
use App\Http\Controllers\MenuController ;
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
/*
Route::get('/', function () {
    return view('welcome');
});

*/

//Route::get("users",APIUserController::class); // Les routes "users.*" de l'API

Route::get("users/show",[UserController::class,'index'])->name('index');
Route::get("users/show/{id}",[UserController::class,'index_id'])->name('index_id');
Route::get("users/destroy/{user}",[UserController::class,'destroy'])->name('destroy');
Route::get("users/create",[UserController::class,'store'])->name('store');
Route::put("users/update/{id}",[UserController::class,'update'])->name('update');


Route::post("adresse/create",[AdresseController::class,'store'])->name('adresse.store');
Route::get("adresse/show",[AdresseController::class,'index'])->name('adresse.index');
Route::put("adresse/update/{id}",[AdresseController::class,'update'])->name('adresse.update');
Route::get("adresse/destroy/{id}",[AdresseController::class,'destroy'])->name('adresse.destroy');


Route::post("menu/create",[MenuController::class,'store'])->name('menu.store');
Route::get("menu/show",[MenuController::class,'index'])->name('menu.index');
Route::put("menu/update/{id}",[AdresseController::class,'update'])->name('adresse.update');
Route::get("menu/destroy/{id}",[AdresseController::class,'destroy'])->name('adresse.destroy');


Route::post("plat/create",[PlatController::class,'store'])->name('plat.store');
Route::get("plat/show",[PlatController::class,'index'])->name('plat.index');
Route::put("plat/update/{id}",[PlatController::class,'update'])->name('plat.update');
Route::get("plat/destroy/{id}",[PlatController::class,'destroy'])->name('plat.destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');