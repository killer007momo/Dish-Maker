<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\APIUserController ;
use App\Http\Controllers\UserController ;
use App\Http\Controllers\AdresseController ;
use App\Http\Controllers\MenuController ;
use App\Http\Controllers\HolidayController ;
use App\Http\Controllers\DishpictureController ;
use App\Http\Controllers\DishController ;
use App\Http\Controllers\DeliverychoicesController ;
use App\Http\Controllers\AddtocarttableController ;
use App\Http\Controllers\PlatController ;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("users/show",[UserController::class,'index'])->name('index');
Route::get("users/show/{id}",[UserController::class,'index_id'])->name('index_id');
Route::delete("users/destroy/{user}",[UserController::class,'destroy']);
Route::post("users/create",[UserController::class,'store'])->name('store');
Route::put("users/update/{id}",[UserController::class,'update'])->name('update');




Route::post("adresse/create",[AdresseController::class,'store'])->name('adresse.store');
Route::get("adresse/show",[AdresseController::class,'index'])->name('adresse.index');
Route::put("adresse/update/{id}",[AdresseController::class,'update'])->name('adresse.update');
Route::delete("adresse/destroy/{id}",[AdresseController::class,'destroy'])->name('adresse.destroy');


Route::post("menu/create",[MenuController::class,'store'])->name('menu.store');
Route::get("menu/show",[MenuController::class,'index'])->name('menu.index');
Route::put("menu/update/{id}",[MenuController::class,'update'])->name('adresse.update');
Route::delete("menu/destroy/{id}",[MenuController::class,'destroy'])->name('adresse.destroy');


Route::post("plat/create",[PlatController::class,'store'])->name('plat.store');
Route::get("plat/show",[PlatController::class,'index'])->name('plat.index');
Route::put("plat/update/{id}",[PlatController::class,'update'])->name('plat.update');
Route::delete("plat/destroy/{id}",[PlatController::class,'destroy'])->name('plat.destroy');


Route::post("holiday/create",[HolidayController::class,'store'])->name('holiday.store');
Route::get("holiday/show",[HolidayController::class,'index'])->name('holiday.index');
Route::put("holiday/update/{id}",[HolidayController::class,'update'])->name('holiday.update');
Route::delete("holiday/destroy/{id}",[HolidayController::class,'destroy'])->name('holiday.destroy');


Route::post("addtocarttable/create",[AddtocarttableController::class,'store'])->name('addtocarttable.store');
Route::get("addtocarttable/show",[AddtocarttableController::class,'index'])->name('addtocarttable.index');
Route::put("addtocarttable/update/{id}",[AddtocarttableController::class,'update'])->name('plat.update');
Route::delete("addtocarttable/destroy/{id}",[AddtocarttableController::class,'destroy'])->name('plat.destroy');


Route::post("deliverychoices/create",[DeliverychoicesController::class,'store'])->name('deliverychoices.store');
Route::get("deliverychoices/show",[DeliverychoicesController::class,'index'])->name('deliverychoices.index');
Route::put("deliverychoices/update/{id}",[DeliverychoicesController::class,'update'])->name('deliverychoices.update');
Route::delete("deliverychoices/destroy/{id}",[DeliverychoicesController::class,'destroy'])->name('deliverychoices.destroy');

Route::post("dish/create",[DishController::class,'store'])->name('dish.store');
Route::get("dish/show",[DishController::class,'index'])->name('dish.index');
Route::put("dish/update/{id}",[DishController::class,'update'])->name('dish.update');
Route::delete("dish/destroy/{id}",[DishController::class,'destroy'])->name('dish.destroy');


Route::post("dishpicture/create",[DishpictureController::class,'store'])->name('dishpicture.store');
Route::get("dishpicture/show",[DishpictureController::class,'index'])->name('dishpicture.index');
Route::put("dishpicture/update/{id}",[DishpictureController::class,'update'])->name('dishpicture.update');
Route::delete("dishpicture/destroy/{id}",[DishpictureController::class,'destroy'])->name('dishpicture.destroy');