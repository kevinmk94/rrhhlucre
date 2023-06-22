<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CargosController;
use App\Http\Controllers\Admin\RegimenesController;
use App\Http\Controllers\Admin\TrabajadoresController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::group(['prefix' => 'admin'], function() {
        Route::resource('/',HomeController::class);
        Route::resource('cargos',CargosController::class);
        Route::resource('regimenes',RegimenesController::class);
        Route::resource('trabajadores',TrabajadoresController::class);
    });
});

