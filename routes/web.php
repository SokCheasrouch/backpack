<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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

Route::get('/pizzas', [PizzaController::class, 'index'])->middleware('auth');

Route::get('/pizzas/create', [PizzaController::class, 'createNewPizza']);

Route::post('/pizzas', [PizzaController::class, 'orderPizza']);

Route::get('/pizzas/{id}', [PizzaController::class, 'showSingleDetail'])->middleware('auth');

Route::delete('/pizzas/{id}', [PizzaController::class, 'destroyPizza'])->middleware('auth');

Auth::routes([
    'register'=> false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
