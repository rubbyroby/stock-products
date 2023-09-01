<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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
/*
Route::POST('/prodcut',[ProductsController::class,'index'])->name('index');
Route::post('/stocks',[ProductsController::class,'update'])->name('update');*/

Route::get('/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::patch('/stocks', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/index', [ProductsController::class, 'destroy'])->name('products.destroy');