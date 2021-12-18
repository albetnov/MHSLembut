<?php

use App\Http\Controllers\UserController;
use App\Models\Products;
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

Route::get('/test', function () {
    $test = Products::with('photo')->get();
    return view('test', compact('test'));
});
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/shop', [UserController::class, 'shop'])->name('shop');
Route::post('/shop/search', [UserController::class, 'shop_search'])->name('shop_search');
Route::get('/shop/{product}', [UserController::class, 'shop_detail'])->name('shop_detail');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::post('/contact', [UserController::class, 'send_contact'])->name('send_contact');

Route::view('/dashboard', 'admin.dashboard');
