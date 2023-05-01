<?php

use App\Http\Controllers\Backend;
use App\Http\Controllers\Frontend;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// 'prefix' => 'admin'
Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function () {
    Route::get('', [Backend\HomeController::class, 'index'])->name('get_admin.home');
});

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('', [Frontend\HomeController::class, 'index'])->name('get.home');
});