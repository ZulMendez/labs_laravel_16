<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\MailcontactController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
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


// Mail 
Route::post('/mail', [MailcontactController::class, 'store'])->name('mail');
Route::post('/mail/newsletter', [NewsletterController::class, 'store'])->name('newsletter');

// Back
Route::delete('/delete/{id}/user', [UserController::class , 'destroy'])->name('user.destroy');
Route::put('/update/role/{id}/user', [UserController::class , 'update'])->name('role.update');

// Auth
Route::get('labslogin', function () {
    return view('/admin/dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('labsregister', function () {
    return view('/admin/welcome');
})->middleware(['auth'])->name('register');


require __DIR__.'/auth.php';
