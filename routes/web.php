<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\WarrantyController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/', [HomeController::class, 'view'])->name('index');
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'postLogin'])->name('post.login');
Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('index');
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('warranty', WarrantyController::class);
});
