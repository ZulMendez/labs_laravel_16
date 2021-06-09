<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\MailcontactController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Models\Discover;
use App\Models\Service;
use App\Models\Titre;
use Illuminate\Routing\Route as RoutingRoute;
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
Route::middleware(['auth'])->group(function () {
    Route::middleware(['webmaster'])->group(function () {
        // newsletter 
        Route::resource('/admin/newsletter', NewsletterController::class);
        // services 
        Route::resource('/admin/service', ServiceController::class);
        // testimonials: 
        Route::resource('/admin/testimonial', TestimonialController::class);
    });
        Route::resource('/admin/user', UserController::class)->middleware('admin');
        Route::put('admin/user/{user}/edit', [UserController::class, 'updateMembre'])->name('membre.update');
});

// CRUD PAGE HOME
Route::get('home/card', function () {
    $cards = Service::inRandomOrder()->limit(3)->get();
    return view('admin/pages/home/card', compact('cards'));
})->name('homecard.index');

Route::resource('/admin/discover', DiscoverController::class);
Route::resource('/admin/video', VideoController::class);

// Auth
Route::get('labslogin', function () {
    return view('/admin/dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
