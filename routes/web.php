<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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
//Route::resource('/', TodoController::class);
 
Route::group(['prefix' => ''], function() {
    Route::get('/', [TodoController::class, 'index']);
    Route::post('create', [TodoController::class,'create']);
    Route::post('update/{id}', [TodoController::class,'update']);
    Route::post('delete/{id}', [TodoController::class,'delete']);
});