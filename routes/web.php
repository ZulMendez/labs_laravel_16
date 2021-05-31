<?php

use App\Http\Controllers\AllController;
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

// Front
Route::get('/', [AllController::class, 'home'])->name('home');
Route::get('/services', [AllController::class, 'services'])->name('services');
Route::get('/blog', [AllController::class, 'blog'])->name('blog');
Route::get('/blog-post', [AllController::class, 'blogp'])->name('blog-post');
Route::get('/contact', [AllController::class, 'contact'])->name('contact');


Route::get('labslogin', function () {
    return view('/admin/dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
