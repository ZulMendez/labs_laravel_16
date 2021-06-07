<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\MailcontactController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UserController;
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
Route::get('/blog/post/{id}', [AllController::class, 'showpost'])->name('blog.show');
Route::get('/contact', [AllController::class, 'contact'])->name('contact');


// Mail 
Route::post('/mail', [MailcontactController::class, 'store'])->name('mail');
Route::post('/mail/newsletter', [NewsletterController::class, 'store'])->name('newsletter');

// Back
//user

Route::middleware(['auth'])->group(function () {

    Route::middleware(['webmaster'])->group(function () {
        // newsletter 
        Route::resource('/admin/newsletter', NewsletterController::class)->middleware('admin');
        // services 
        Route::get('/admin/services/all', [ServicesController::class,'index'])->name('services.all'); 
        Route::get('/admin/services/edit/{service}', [ServicesController::class,'edit'])->name('service.edit'); 
        Route::put('/admin/services/update/{service}', [ServicesController::class, 'update'])->name('service.update'); 
        Route::post('/admin/services/del/{service}', [ServicesController::class, 'destroy'])->name('service.del');
        Route::post('/admin/services/store', [ServicesController::class, 'store'])->name('service.store'); 

        Route::get('/admin/services/icones', [ServicesController::class,'searchicones'])->name('services.icones');
        Route::get('/admin/services/create', [ServicesController::class,'create'])->name('service.create');  

        //testimontials: 

        Route::get('/admin/testimontials/all', [TestimontialController::class,'index'])->name('testimontial.all');

    });
        Route::resource('/admin/user', UserController::class)->middleware('admin');

});
// Auth
Route::get('labslogin', function () {
    return view('/admin/dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('labsregister', function () {
    return view('/admin/welcome');
})->middleware(['auth'])->name('register');


require __DIR__.'/auth.php';
