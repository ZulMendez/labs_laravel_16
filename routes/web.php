<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\MailcontactController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ReadyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\VideoController;
use App\Models\Discover;
use App\Models\Service;
use App\Models\Titre;
use App\Models\User;
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

// Search
Route::get('/blog/search/', [AllController::class, 'search'])->name('blog.search');

// Mail 
Route::post('/mail', [MailcontactController::class, 'store'])->name('mail');
Route::post('/mail/newsletter', [NewsletterController::class, 'store'])->name('newsletter');


// Back
Route::middleware(['auth'])->group(function () {
    Route::middleware(['webmaster'])->group(function () {
        // titres
        Route::resource('/admin/titre', TitreController::class);
        // CRUD PAGE HOME
        Route::get('home/card', function () {
            $cards = Service::all();
            return view('admin/pages/home/card', compact('cards'));
        })->name('homecard.index');
        // discover
        Route::resource('/admin/discover', DiscoverController::class);

        // video
        Route::resource('/admin/video', VideoController::class);

        // services 
        Route::resource('/admin/service', ServiceController::class);

        // testimonials: 
        Route::resource('/admin/testimonial', TestimonialController::class);

         // newsletter 
        Route::resource('/admin/newsletter', NewsletterController::class);

        // ready
        Route::get('/admin/ready', [ReadyController::class, 'index'])->name('ready.index');
        Route::get('/admin/ready/{ready}/edit', [ReadyController::class, 'edit'])->name('ready.edit');
        Route::get('/admin/ready/{ready}/update', [ReadyController::class, 'update'])->name('ready.update');
        
        // contact
        Route::get('/admin/contact', [ContactController::class, 'index'])->name('contact.index');
        Route::get('/admin/contact/{contact}/edit', [ContactController::class, 'edit'])->name('contact.edit');
        Route::get('/admin/contact/{contact}/update', [ContactController::class, 'update'])->name('contact.update');

        // Blog
        Route::resource('/admin/blog', BlogController::class);
        
        // validate
        Route::get('/admin/validate', [ValidateController::class, 'index'])->name('validate.index');
        // Valider un membre
        Route::put('/admin/validation/member/update/{id}', [ValidateController::class, 'updateUser'])->name('validateUserUpdate');
        // Supprimer un membre non-valid??
        Route::delete('/admin/validate/user/{id}/delete', [ValidateController::class,'deleteUser'])->name('validateDeleteUser');

        // article
        Route::put('/admin/validate/update/{id}', [ValidateController::class, 'updateArticle'])->name('validateUpdateArticle');
        // D??placer un article dans la corbeille
        Route::put('/admin/trash/article/{id}/', [TrashController::class,'trashArticle'])->name('trashArticle');
        // R??cup??rer un article de la corbeille
        Route::put('/admin/recup/article/{id}/', [TrashController::class,'recupArticle'])->name('recupArticle');

        // commentaires
        Route::post('/blog/article/{id}/comment', [CommentController::class, "store"])->name('commentStore');
        // Valider un commentaire
        Route::put('/admin/validation/update/{id}', [CommentController::class, 'update'])->name('commentUpdate');
        // Supprimer un commentaire non-valid??
        Route::delete('/admin/validate/comment/{id}/delete', [ValidateController::class,'deleteComment'])->name('validateDeleteComment');

    });
        Route::resource('/admin/user', UserController::class)->middleware('admin');
});
Route::put('admin/user/{user}/edit', [UserController::class, 'updateMembre'])->name('membre.update');

// admin - TRASH
Route::get('/admin/trash', [TrashController::class, 'index'])->middleware(['webmaster'])->name('trash.index');
// Supprimer un article de la corbeille d??finitivement
Route::delete('/admin/trash/article/{id}/delete', [TrashController::class,'deleteArticle'])->name('deleteArticle');

// crud blog redacteur
Route::middleware(['redacteur'])->group(function () {
    // Route::get('/admin/blog/index', [BlogController::class, 'index'])->name('blog.index');
    // Route::get('/admin/blog/show/{article}', [BlogController::class, 'show'])->name('blog.show'); 
    // Route::get('/admin/blog/edit/{article}', [BlogController::class, 'edit'])->name('blog.edit'); 
    // Route::post('/admin/blog/update/{article}', [BlogController::class,'update'])->name('blog.update');
}); 


// Auth
Route::get('/back', function () {
    $user = User::all();
    return view('/admin/dashboard', compact('user'));
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
